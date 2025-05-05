<template>
  <BaseLayout>
    <FormKit @submit="handleLogin" type="form" :actions="false" form-class="bg-indigo-500 mx-auto w-3/12 mt-10 rounded rounded-xl"> 

      <!--Email-->
      <div class="pt-3">
        <FormKit type="text" v-model="email" label="Email" label-class="text-xl text-white ml-3"
          input-class="text-xl text-black ml-3 rounded w-10/12" />
      </div>

      <!--Jelszó-->
      <div class="pt-3">
        <FormKit type="password" v-model="password" label="Jelszó" label-class="text-xl text-white ml-3"
          input-class="text-xl text-black ml-3 rounded w-10/12" />
      </div>

      <!--Gomb-->
      <div class="pt-2">
          <button type="submit" class="rounded bg-white text-indigo-500 font-bold p-2 m-3">Bejelentkezés</button>
      </div>

      
    </FormKit>

    <div v-if="error" class="mt-5 bg-red-400 p-4 text-center text-black w-3/12 mx-auto rounded-xl">
        <h2>Hibás email vagy jelszó!</h2>
      </div>
  </BaseLayout>
</template>

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue'
import {ref} from 'vue';
import {useUserStore} from '@stores/UserStore.js';
import { useRouter } from 'vue-router';

// Változók
const userStore = useUserStore();
const email = ref('');
const password = ref('');
const error = ref(null);
const router = useRouter();


async function handleLogin() {
  error.value = null;
  try{
    const response = await userStore.authenticateUser(email.value, password.value);

    const beosztas = userStore.user.beosztas;
    const user = userStore.user;

    console.log('Bejelentkezett felhasználó: ', userStore.user)
    console.log('Token: ', sessionStorage.getItem('token'))

    if(user.role === 'admin' && user.beosztas === 'orvos') {
      console.log('Próbálok átirányítani a doktor oldalra...');
      router.push('/doctor/');
      console.log('átirányítás megtörtént')
    } else if( user.role === 'admin' && user.beosztas === 'asszisztens') {
      router.push('/assistant/');
    } else if( user.role === 'user' && user.beosztas === 'takarito') {
      router.push('/cleaner/');
    }
    console.log('Sikeres bejelentkezés!')

  }catch(err){
    console.log('Sikertelen bejelentkezés: ', err)
    error.value = err;
  }
}
</script>
