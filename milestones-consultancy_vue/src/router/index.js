import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AboutView from '../views/AboutView.vue'
import ActivitiesView from '../views/ActivitiesView.vue'
import ContactView from '../views/ContactView.vue'
import PricingView from '../views/PricingView.vue'
import ServicesView from '../views/ServicesView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: AboutView
  },
  {
    path: '/activities',
    name: 'activities',
    component: ActivitiesView
  },
  {
    path: '/contact',
    name: 'contact',
    component: ContactView
  },

  {
    path: '/pricing',
    name: 'pricing',
    component: PricingView
  },
  {
    path: '/services',
    name: 'services',
    component: ServicesView
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
