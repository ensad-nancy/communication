<template>
  <div class="container">
    <div v-for="elmt in state.source.elements">
      <div class="col-sm-12">
        <p><a v-link="elmt.www"> {{elmt.title}} </a></p>
      </div>
  </div>
</template>

<script>
import state from './../state.js'

export default {
  data: function () { return {state: state} }
}
</script>

<style scoped>
</style>

