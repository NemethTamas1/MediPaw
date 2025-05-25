<template>
  <BaseLayout>
    <FormKit @submit="handleLogin" type="form" :actions="false"
      form-class="bg-white mx-auto w-3/12 mt-10 rounded rounded-xl">

      <!--Email-->
      <div class="pt-3">
        <FormKit type="text" v-model="email" label="Email" label-class="text-xl text-black ml-3"
          input-class="text-xl text-black ml-3 rounded w-10/12 border border-gray-500 p-2"
          placeholder="email@example.com" />
      </div>

      <!--Jelszó-->
      <div class="pt-3">
        <FormKit type="password" v-model="password" label="Jelszó" label-class="text-xl text-black ml-3"
          input-class="text-xl text-black ml-3 rounded w-10/12 border border-gray-500 p-2" placeholder="Jelszó" />
      </div>

      <!--Gomb-->
      <div class="pt-2" ref="isUserLoggedIn">
        <button type="submit"
          class="rounded bg-white text-black border border-black font-bold p-2 m-3 text-xl">Bejelentkezés</button>
      </div>

      <p><a href="/registration">Nincs még MediPaw fiókja? Regisztráljon itt!</a></p>


    </FormKit>

    <div v-if="error" class="mt-5 bg-red-400 p-4 text-center text-black w-3/12 mx-auto rounded-xl">
      <h2>Hibás email vagy jelszó!</h2>
    </div>
  </BaseLayout>
</template>

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue'
import { ref } from 'vue';
import { useUserStore } from '@stores/UserStore.js';
import { useRouter } from 'vue-router';

// Változók
const userStore = useUserStore();
const email = ref('');
const password = ref('');
const error = ref(null);
const router = useRouter();

const redirectUser = (user) => {
  if (user.role === 'gazdi') {
    router.push('/gazdi/dashboard');
  } else if (user.role === 'admin' && user.beosztas === 'orvos') {
    router.push('/doctor');
  } else if (user.role === 'admin' && user.beosztas === 'asszisztens') {
    router.push('/assistant');
  } else if (user.role === 'user' && user.beosztas === 'takarito') {
    router.push('/cleaner');
  } else {
    router.push('/');
  }

  console.log('[DEBUG] user:', user)
  console.log('[DEBUG] role:', user.role)
  console.log('[DEBUG] beosztas:', user.beosztas)

};


async function handleLogin() {
  error.value = null;
  try {
    await userStore.authenticateUser(email.value, password.value);

    console.log("userId in sessionStorage:", sessionStorage.getItem('userId'));

    const userId = sessionStorage.getItem('userId');
    await userStore.getOneUser(userId);
    
    const user = userStore.user;
    redirectUser(user);

  } catch (err) {
    console.log('Sikertelen bejelentkezés: ', err);
    error.value = err;
  }
}

</script>
