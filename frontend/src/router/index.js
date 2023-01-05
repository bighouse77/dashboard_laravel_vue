import { createRouter, createWebHashHistory } from 'vue-router'

import LoginComponent from '@/components/Login/LoginComponent'
import HomeComponent from '@/components/Home/HomeComponent'
import ContentComponent from '@/components/Conteudo/ContentComponent'

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
  {
    path: '/conteudo',
    name: 'content',
    component: ContentComponent
  },
  {
    path: '/relatorios',
    name: 'relatorios',
    component: HomeComponent
  },
  {
    path: '/atendimentos',
    name: 'atendimentos',
    component: HomeComponent
  },
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router