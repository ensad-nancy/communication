<template>
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

<style lang="sass" >

li
  list-style: none;

h2, p
  .normal
  line-height: 1.1

</style>


