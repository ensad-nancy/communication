<template>
    <h1 class="bigtitle">yearbook</h1>
    <div v-for="year in years">

      <div class="row">
        <h2 class="col-sm-4">{{year.label}}</h2>
        <h2 class="col-sm-4">DNSEP</h2>
        <h2 class="col-sm-4">{{year.dnsep.length}}</h2>
      </div>

      <div class="row">
        <p v-for="elmt in year.dnsep" class="col-sm-4">
            <a href="{{elmt.www}}" target="_blank">{{elmt.prenom}} {{elmt.nom}}</a>
        </p>
      </div>
      <div class="row">
        <h2 class="col-sm-4">{{year.label}}</h2>
        <h2 class="col-sm-4">DNAP</h2>
        <h2 class="col-sm-4">{{year.dnap.length}}</h2>
      </div>

      <div class="row">
        <p v-for="elmt in year.dnap" class="col-sm-4">
          <a href="{{elmt.www}}" target="_blank">{{elmt.prenom}} {{elmt.nom}}</a>
        </p>
      </div>
    </div>
</template>

<script>
import state from './../state.js'
import _ from 'lodash'

export default {
  data: function () { return {state: state} },
  computed: {
    years: function () {
      return _(this.state.yearbook.elements)
      .map((elmt) => {
        return _.trim(elmt.DNSEP)
      })
      .sortedUniq()
      .filter((d) => {
        return d !== ''
      })
      .map((year) => {
        return {
          label: year,
          dnsep: this.dnsep[year],
          dnap: this.dnap[year]
        }
      })
      .value()
    },
    dnsep: function () {
      return _(this.state.yearbook.elements).groupBy((elmt) => {
        return _.trim(elmt.DNSEP)
      }).value()
    },
    dnap: function () {
      return _(this.state.yearbook.elements).groupBy((elmt) => {
        return _.trim(elmt.DNAP)
      }).value()
    }
  }
}
</script>

<style lang="sass" scoped>
  // .row:first-child h2
  //   margin-top: 0
  //   padding-top: 0


</style>

