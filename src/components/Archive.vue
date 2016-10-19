<template>
  <div v-for="item in state.archive.elements">
      <Archiveitem :item="item"></Archiveitem>
  </div>
</template>

<script>
import state from './../state.js'
import Archiveitem from './Archiveitem'

export default {
  data: function () { return {state: state} },
  components: { Archiveitem }
}
</script>

<style lang="sass" scoped>
  h1
    text-transform: uppercase;
  .row
    padding-left: 20px;

</style>
