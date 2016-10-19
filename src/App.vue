<template>
    <div id="app">
      <div class="col-sm-offset-6 col-sm-6" >
        <h1 class="bigtitle">ENSA NANCY COMMUNICATION</h1>
        <router-view></router-view>
      </div>
      <Navbar></Navbar>
    </div>
</template>

<script>
  import state from './state.js'
  import Tabletop from 'Tabletop'
  import Navbar from './components/Navbar'
  import _ from 'lodash'
  import $ from 'jquery'

  const keys = {
    source: '1WauUa8r2qX4WHwJrK-W9nY2Y8H7qxWb9kbjtZ50s1Kw',
    archive: 'http://api.tumblr.com/v2/blog/nouveau.plateforme.org/posts/',
    archive_key: 'Srhk9qkcJO69pAoB4ltM5uIqpwUBO7kgDqDEaCD9Jo8EafWyHE',
    about: 'https://raw.githubusercontent.com/ensad-nancy/communication/gh-pages/README.md',
    reseau: 'https://raw.githubusercontent.com/ensad-nancy/communication/gh-pages/SOCIAL.md',
    yearbook: '1nPwfhbwXeIv8ksiuX6Q9rj7QBzV6skdr0z_g2gvaL3E'
  }

  export default {
    components: {Navbar},
    created: function () {
      // GET source
      Tabletop.init({ key: keys.source,
        callback: (data, tabletop) => {
          state.source.elements = _.sortBy(data.source.elements, (d) => { return -d.type })
        }
      })

      // GET yearbook
      Tabletop.init({ key: keys.yearbook,
        callback: (data, tabletop) => { state.yearbook.elements = data.yearbook.elements }
      })

      // GET About
      this.$http.get(keys.about).then(
        (response) => { state.about.raw = response.body },
        (response) => { console.log('err', response) }
      )

      // GET Réseau
      this.$http.get(keys.reseau).then(
        (response) => { state.reseau.raw = response.body },
        (response) => { console.log('err', response) }
      )

      // GET archives
      // TODO : this is really BAD ! this sould be done with VueResource (cors issue where on the road)
      var posts = []

      function getPosts (offset) {
        $.ajax({
          url: 'http://api.tumblr.com/v2/blog/nouveau.plateforme.org/posts/',
          data: {
            api_key: 'Srhk9qkcJO69pAoB4ltM5uIqpwUBO7kgDqDEaCD9Jo8EafWyHE',
            notes_info: true,
            offset: offset
          },
          dataType: 'jsonp',
          success: function (data) {
            posts = posts.concat(data.response.posts)
            if (data.response.posts.length === 20) {
              getPosts(offset + 20)
            } else {
              state.archive.elements = posts
            }
          }
        })
      }
      getPosts(0)
    }
  }
</script>

<style lang="sass">
  @import "./assets/fonts/PropCourierSans/stylesheet.css";

  *
    font-family: 'PropCourierSans', monospace
  h1.bigtitle
    width: 100%
    text-align: center
    height: 7vh

  a, a:hover, a:active
    color: black
    text-decoration: none
    text-transform: lowercase
  a:hover, a:active
    text-transform: uppercase


  twitterwidget::shadow *
    filter: grayscale(100%);

</style>
