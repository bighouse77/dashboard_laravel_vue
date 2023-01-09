import { createRouter, createWebHashHistory } from 'vue-router'

import LoginComponent from '@/components/Login/LoginComponent'
import HomeComponent from '@/components/Home/HomeComponent'
import ContentComponent from '@/components/Conteudo/ContentComponent'
import AtendimentosComponent from '@/components/Atendimentos/AtendimentosComponent'
import RelatoriosComponent from '@/components/Relatorios/RelatoriosComponent'

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
    path: '/atendimentos',
    name: 'atendimentos',
    component: AtendimentosComponent
  },
  {
    path: '/relatorios',
    name: 'relatorios',
    component: RelatoriosComponent
  }, 
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router