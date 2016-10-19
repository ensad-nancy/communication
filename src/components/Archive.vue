<template>
  <div v-for="elmt in state.archive.elements">
    <div class="row">
      <h1 >{{elmt.title}}</h1>
      <p class="col-sm-2">{{elmt.date}}</p>
      <p class="col-sm-2">{{elmt.date}}</p>
      <p class="col-sm-10">{{elmt.summary}}</p>
    </div>
</template>

<script>
import state from './../state.js'

export default {
  data: function () { return {state: state} }
}
</script>

<style lang="sass" scoped>
  h1
    text-transform: uppercase;
  .row
    padding-left: 20px;

</style>
