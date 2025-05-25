import { useUserStore } from '@stores/UserStore';
import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'MainPage',
    component: () => import('@pages/MainPage.vue')
  },
  {
    path: '/login',
    name: 'LoginPage',
    component: () => import('@pages/LoginSite.vue')
  },
  {
    path: '/doctor/',
    name: 'Doctor',
    component: () => import('@pages/DoctorMainPage.vue'),
    meta: {
      requiresAuth: true,
      role: 'admin',
      beosztas: 'orvos'
    }
  },
  {
    path: '/assistant/',
    name: 'Assistant',
    component: () => import('@pages/AssistantMainPage.vue'),
    meta: {
      requiresAuth: true,
      role: 'admin',
      beosztas: 'asszisztens'
    }
  },
  {
    path: '/cleaner/',
    name: 'Cleaner',
    component: () => import('@pages/CleanerMainPage.vue'),
    meta: {
      requiresAuth: true,
      role: 'user',
      beosztas: 'takarito'
    }
  },
  {
    path: '/owner/dashboard',
    name: 'OwnerDashboard',
    component: () => import('@pages/OwnerDashboard.vue'),
    meta:{
      requiresAuth: true
    }
  },
  {
    path: '/registration',
    name: 'RegistrationSite',
    component: () => import('@pages/RegistrationSite.vue')
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

const checkUserPermission = (user, routeMeta) => {
  return routeMeta.role === user.role && routeMeta.beosztas === user.beosztas;
};

router.beforeEach((to, from, next) => {
  const userStore = useUserStore();

  if(to.meta.requiresAuth) {
    const token = sessionStorage.getItem('token');

    if(!token || !userStore.user) {
      next({name: 'LoginPage'});
      return;
    }

    const user = userStore.user;

    console.log('USER DEBUG: ', {
      user,
      requiedRole: to.meta.beosztas,
      requiredBeosztas: to.meta.beosztas
    });

    

    if (!checkUserPermission(user, to.meta)) {
      next({ path: '/' });
    } else {
      next();
    }
  } else {
    next()
  }
})

export default router