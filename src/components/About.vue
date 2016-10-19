<template>
  <div>
      {{{html}}}
  </div>
</template>

<script>
import state from './../state.js'
import marked from 'marked'

export default {
  data: function () { return {state: state} },
  computed: {
    html: function () { return marked(this.state.about.raw) }
  }
}
</script>

<style lang="sass" scoped>


.navbar-fixed-left
  position: fixed;
  border-radius: 0;
  height: 100vh;
  top: 0;
  background: black

</style>


