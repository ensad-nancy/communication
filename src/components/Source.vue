<template>
    <div v-for="elmt in sortedElements">
      <div class="row">
        <p class="col-sm-2">{{elmt.type}}</p>
        <p class="col-sm-4"><a v-link="elmt.www"> {{elmt.title}} </a></p>
        <p class="col-sm-6">{{elmt.themes}}</p>
      </div>
    </div>
</template>

<script>
import state from './../state.js'
import _ from 'lodash'

export default {
  data: function () { return {state: state} },
  computed: {
    sortedElements: function () {
      return _.sortBy(state.source.elements, (el) => { return el.type })
    }
  }
}
</script>

<style lang="sass" scoped>

  .row
   border-top: dotted 1px black
   padding-top: 8px;
   padding-bottom: 8px;


</style>

