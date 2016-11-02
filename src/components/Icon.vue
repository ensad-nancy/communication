<template>
  <a class="large" v-link="{ path: item.uri, activeClass: 'active' }">
    <img :src="imgSrc" ><br/>
    {{item.label}}
  </a>
</template>

<script>
export default {
  props: ['item'],
  computed: {
    imgSrc: function () {
      return 'https://ensad-nancy.github.io/communication/src/assets/icons/vani/' + this.item.uri + '.svg'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="sass" scoped>

  a
    height: 100/3 vh
    text-align: center
    display: block
    color: white
    height: 30vh
    text-decoration: none
    // text-transform: uppercase
    border: none

  img
    max-width: 100%
    height: 80%;

</style>
