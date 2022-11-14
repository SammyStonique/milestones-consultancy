import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './index.css'
import '@/assets/js/scroll-to-top'

createApp(App).use(store).use(router).mount('#app')
