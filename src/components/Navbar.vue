<template>
  <nav
    v-bind:class="{ 'isOverlay': state.ui.navbar}"
    class="navbar navbar-fixed-left col-sm-6"
  >
    <h1 class="bigtitle"><a v-link="'/'">ART DE L’INFORMATION</a></h1>

    <div v-for="item in state.ui.menu" class="col-sm-6">
      <Icon :item="item"></Icon>
    </div>
  </nav>
</template>

<script>
  import state from './../state.js'
  import Icon from './Icon'

  export default {
    data: function () { return {state: state} },
    components: { Icon }
  }
</script>

<style lang="sass" scoped>

  h1.bigtitle
    width: 100%
    color: white
    text-align: center
    a
      text-decoration: none
      color: white

  .navbar-fixed-left
    position: fixed;
    border-radius: 0;
    height: 100vh;
    top: 0;
    background: black

</style>


