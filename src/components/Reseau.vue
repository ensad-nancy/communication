<template>
  <h1 class="bigtitle">réseau</h1>

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
    html: function () { return marked(this.state.reseau.raw) }
  }
}
</script>

<style lang="sass" scoped>

</style>


