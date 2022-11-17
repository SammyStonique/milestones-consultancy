import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import VueLazyLoad from 'vue3-lazyload'
import './index.css'
import '@/assets/js/scroll-to-top'


createApp(App).use(store).use(VueLazyLoad, {
    loading: '',
    error: '',
    lifecycle: {
      loading: (el) => {
        console.log('loading', el)
      },
      error: (el) => {
        console.log('error', el)
      },
      loaded: (el) => {
        console.log('loaded', el)
      }
    }
  }).use(router).mount('#app')
