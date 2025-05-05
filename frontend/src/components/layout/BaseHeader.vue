<template>
  <nav class="bg-black text-white">
    <div class="flex p-3 flex-wrap justify-between w-full items-center">

      <!-- Bal oldal: Logo + Főoldal -->
      <div class="flex items-center space-x-6">
        <RouterLink to="/" class="flex items-center space-x-3">
          <span class="self-center text-2xl font-semibold">Medi <i class="fa-solid fa-paw"></i> Paw</span>
        </RouterLink>

        <RouterLink to="/" class="flex items-center space-x-3">
          <span class="self-center text-base font-semibold">Főoldal</span>
        </RouterLink>
      </div>

      <!-- Jobb oldal: Bejelentkezés / Kijelentkezés -->
      <div class="flex items-center">
        <RouterLink v-if="!isUserLoggedIn" to="/login" class="flex items-center space-x-3">
          <span class="self-center text-base font-semibold">Bejelentkezés</span>
        </RouterLink>

        <RouterLink v-if="isUserLoggedIn" to="/" class="flex items-center space-x-3">
          <span class="self-center text-base font-semibold" @click="handleLogOut">Kijelentkezés</span>
        </RouterLink>
      </div>

    </div>
  </nav>
</template>


<script setup>
// Importok
import {useUserStore} from '@stores/UserStore.js'
import { onMounted, ref } from 'vue';
import { RouterLink } from 'vue-router';

// Változók
const userStore = useUserStore();
const isUserLoggedIn = ref(null);

// Függvények
onMounted(async () => {
  isUserLoggedIn.value = await userStore.isLoggedIn();
})

// Kijelentkezés
const handleLogOut = async () => {
  await userStore.logout();
  isUserLoggedIn.value = false;
};
</script>