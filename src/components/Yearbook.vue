<template>
    <div v-for="elmt in state.yearbook.elements">
      <div class="row">
        <p class="col-sm-4">
          {{elmt.prenom}}
          {{elmt.nom}}
        </p>

        <p class="col-sm-4">
          {{elmt.DNSEP}}
          {{elmt.DNAP}}
        </p>

        <p class="col-sm-4">
          <a v-link="elmt.www">{{elmt.www}}</a>
        </p>
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

