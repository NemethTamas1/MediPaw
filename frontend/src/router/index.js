import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'MainPage',
    component: () => import('@pages/main/MainPage.vue')
  },
  {
    path: '/login',
    name: 'LoginPage',
    component: () => import('@pages/main/LoginSite.vue')
  },
  {
    path: '/doctor/',
    name: 'Doctor',
    component: () => import('@pages/main/DoctorMainPage.vue'),
  },
  {
    path: '/assistant/',
    name: 'Assistant',
    component: () => import('@pages/main/AssistantMainPage.vue'),
  },
  {
    path: '/cleaner/',
    name: 'Cleaner',
    component: () => import('@pages/main/CleanerMainPage.vue'),

  },
  {
    path: '/rendelo/:id',
    name: 'RendeloMain',
    component: () => import('@pages/main/[id]/RendeloMain.vue')
  },
  {
    path: '/gazdi/dashboard',
    name: 'GazdiDashboard',
    component: () => import('@pages/main/GazdiDashboard.vue'),

  },
  {
    path: '/register',
    name: 'RegisterPage',
    component: () => import('@pages/main/Register.vue'),
   
  }
]

export const router = createRouter({
  history: createWebHistory(),
  linkActiveClass: 'active',
  routes,
  scrollBehavior(to, from, savedPosition){
    return { top: 0}
  }
})

export default router