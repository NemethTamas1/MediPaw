import { createRouter, createWebHistory } from 'vue-router';
import DoctorMainPage from '@pages/main/DoctorMainPage.vue';
import LoginSite from '@pages/LoginSite.vue';
import AssistantMainPage from '@pages/main/AssistantMainPage.vue';
import CleanerMainPage from '@pages/main/CleanerMainPage.vue';


const routes = [
  {path: '/', name: 'Login', component: LoginSite},
  {path: '/doctor/', name:'DoctorMainPage', component: DoctorMainPage},
  {path: '/assistant/', name:'AssistantMainPage', component: AssistantMainPage},
  {path: '/cleaner/', name:'CleanerMainPage', component: CleanerMainPage},
]

export const router = createRouter({
  history: createWebHistory(),
  linkActiveClass: 'active',
  routes
})