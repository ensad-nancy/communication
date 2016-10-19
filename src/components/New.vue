<template>
  <div class="container">
    <div v-for="elmt in state.source.elements">
      <div class="col-sm-3">
        <p>{{elmt.title}}</p>
        <p>{{elmt.www}}</p>
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

