import { componentSymbol } from '@formkit/vue';
import { useUserStore } from '@stores/UserStore';
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
    meta: {
      requiresAuth: true,
      role: 'admin',
      beosztas: 'orvos'
    }
  },
  {
    path: '/assistant/',
    name: 'Assistant',
    component: () => import('@pages/main/AssistantMainPage.vue'),
    meta: {
      requiresAuth: true,
      role: 'admin',
      beosztas: 'asszisztens'
    }
  },
  {
    path: '/cleaner/',
    name: 'Cleaner',
    component: () => import('@pages/main/CleanerMainPage.vue'),
    meta: {
      requiresAuth: true,
      role: 'user',
      beosztas: 'takarito'
    }
  },
  {
    path: '/rendelo/:id',
    name: 'RendeloMain',
    component: () => import('@pages/main/[id]/RendeloMain.vue'),
    meta:{
      requiresAuth: true,
      role: 'admin',
      beosztas: 'orvos'
    }
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

router.beforeEach((to, from, next) => {
  const userStore = useUserStore();

  if(to.meta.requiresAuth) {
    const token = sessionStorage.getItem('token');

    if(!token) {
      next({name: 'Login'})
      return
    }

    const user = userStore.user;
    if(!user) {
      next({name: 'Login'})
      return
    }

    if (to.meta.role === user.role && to.meta.beosztas === user.beosztas) {
      // Ha megfelelő jogosultsága van, engedjük tovább
      next()
    } else {
      // Ha nincs megfelelő jogosultsága, irányítsuk át a megfelelő oldalra
      if (user.role === 'admin' && user.beosztas === 'orvos') {
        next({ path: '/doctor/' })
      } else if (user.role === 'admin' && user.beosztas === 'asszisztens') {
        next({ path: '/assistant/' })
      } else if (user.role === 'user' && user.beosztas === 'takarito') {
        next({ path: '/cleaner/' })
      } else {
        // Ha nem ismert a jogosultság, irányítsuk a főoldalra vagy egy hibaoldalra
        next({ path: '/' })
      }
    }
  } else {
    // Ha az útvonal nem igényel hitelesítést, engedjük tovább
    next()
  }
})

export default router