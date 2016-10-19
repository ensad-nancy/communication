<template>
  <div class="row">
    <h1 ><a href="{{item.post_url}}" target="_blank">{{item.title}}</a></h1>
    <p class="col-sm-2">{{item.date}}</p>

    <div  class="col-sm-4 mini">
      <img v-for="img in images" :src="img">
    </div>
    <p class="col-sm-6">{{item.summary}}</p>

  </div>
</template>

<script>
import _ from 'lodash'

export default {
  props: ['item'],
  computed: {
    images: function () {
      let imgs = []
      // TODO : add a proper regex
      const regex = /(http|ftp|https):\/\/([\w_-]+(?:(?:\.[\w_-]+)+))([\w,@?^=%&:/~+#-]*)(.png|.jpg)?/gmi
      let m

      while ((m = regex.exec(this.item.body)) !== null) {
        if (m.index === regex.lastIndex) { regex.lastIndex++ }
        if (regex.lastIndex > 3) imgs.push(m[0])
      }
      return _.map(imgs, function (url) {
        return url.replace('_540', '_100')
      })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>
  .mini img
    max-width: 100px
    max-height: 100px
    float: left;
</style>
