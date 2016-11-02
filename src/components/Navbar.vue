<template>
  <nav
    v-bind:class="{ 'isOverlay': state.ui.navbar}"
    class="navbar navbar-fixed-left col-sm-5"
  >
    <h1 class="bigtitle">
      <a v-link="{ path: '/now' }">art de l'information</a>
    </h1>

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

  a
    color: white
    border: none

  .bigtitle a
    color: white
    text-transform: uppercase

  .navbar-fixed-left
    position: fixed;
    border-radius: 0;
    height: 100vh;
    top: 0;
    background: black

</style>


