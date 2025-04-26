<template>
  <BaseLayout>
    <FormKit type="form" :actions="false" form-class="bg-indigo-500 mx-auto w-3/12 mt-10 rounded rounded-xl"> 

      <!--Email-->
      <div class="pt-3">
        <FormKit type="text" label="Email" label-class="text-xl text-white ml-3"
          input-class="text-xl text-white ml-3 rounded w-10/12" />
      </div>

      <!--Jelszó-->
      <div class="pt-3">
        <FormKit type="password" label="Jelszó" label-class="text-xl text-white ml-3"
          input-class="text-xl text-white ml-3 rounded w-10/12" />
      </div>

      <!--Gomb-->
      <div class="pt-2">
          <button :click="handleLogin" type="submit" class="rounded bg-white text-indigo-500 font-bold p-2 m-3">Bejelentkezés</button>
      </div>
    </FormKit>
  </BaseLayout>
</template>

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue'


const handleLogin = () => {

}
</script>
