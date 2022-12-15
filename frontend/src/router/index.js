import { createRouter, createWebHashHistory } from 'vue-router'

import LoginComponent from '@/components/Login/LoginComponent'
import HomeComponent from '@/components/Home/HomeComponent'

const routes = [
  {
    path: '/',
    name: 'login',
    component: LoginComponent
  },
  {
    path: '/home',
    name: 'home',
    component: HomeComponent
  },
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router