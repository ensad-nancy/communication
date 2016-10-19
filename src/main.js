import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import App from './App.vue'

import Yearbook from './components/Yearbook.vue'
import Source from './components/Source.vue'
import About from './components/About.vue'
import Archive from './components/Archive.vue'
import New from './components/New.vue'
import Reseau from './components/Reseau.vue'

Vue.use(VueResource)
Vue.use(VueRouter)
// Vue.http.options.xhr = { withCredentials: true }

const router = new VueRouter()

router.map({
  '/archive/': { component: Archive },
  '/yearbook/': { component: Yearbook },
  '/source/': { component: Source },
  '/about/': { component: About },
  '/reseau/': { component: Reseau },
  '/random/': { component: Source },
  '/': { component: New }
})

// router.redirect({
//   '/': '/projects'
// })

router.beforeEach(function (transition) {
  window.scrollTo(0, 0)
  transition.next()
})

router.start(App, '#container')
