import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import axios from 'axios';
import VueAxios from 'vue-axios'
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import './index.css'
import '@/assets/js/scroll-to-top'

// axios.defaults.baseURL = 'http://127.0.0.1:8000/'
// axios.defaults.baseURL = 'https://milestonesconsultancy.co.ke/'


createApp(App).use(store).use(router).use(VueAxios, axios).use(VueToast).mount('#app')
