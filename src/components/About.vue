<template>
  <h1 class="bigtitle">à propos</h1>
  <div class="about">
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

li
  list-style: none;

h2, p
  .normal
  line-height: 1.1
  text-align: justify

</style>


