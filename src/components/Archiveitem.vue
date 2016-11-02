<template>
  <div class="row">

    <p class="col-sm-4">
      {{item.date | shortentime }}<br/>
      <a href="{{item.post_url}}" target="_blank">{{item.title}}</a>
    </p>
    <div  class="col-sm-8 mini">
      <a href="{{item.post_url}}" target="_blank">
        <img v-for="img in images" :src="img">
      </a>
    </div>
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
  .mini
    img
      max-width: 100px
      max-height: 100px
      float: left
    a
      border:none

  .row
    padding: 30px 0 30px
    border-bottom: solid black 1px
</style>
