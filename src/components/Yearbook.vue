<template>
    <div v-for="elmt in state.yearbook.elements">
      <div class="row">
        <p class="col-sm-3">
          <span v-if="elmt.DNAP">DNAP ({{elmt.DNAP}})</span>
        </p>

        <p class="col-sm-3">
          <span v-if="elmt.DNSEP">DNSEP ({{elmt.DNSEP}})</span>
        </p>

        <p class="col-sm-6">
          <a href="{{elmt.www}}" target="_blank">{{elmt.prenom}}
          {{elmt.nom}}</a>
        </p>




      </div>
      <hr>
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

