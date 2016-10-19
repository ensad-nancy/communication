<template>
    <div v-for="elmt in state.source.elements">
      <div class="row">
      <p class="col-sm-2">{{elmt.type}}</p>
      <p class="col-sm-4"><a v-link="elmt.www"> {{elmt.title}} </a></p>
      <p class="col-sm-6">{{elmt.themes}}</p>
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

