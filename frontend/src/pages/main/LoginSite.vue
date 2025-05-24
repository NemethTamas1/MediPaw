<template>
  <BaseLayout>
    <h1 class="text-3xl font-bold text-center my-10 text-[#FEFAE0]">
      Belépés / Regisztráció
    </h1>

    <!-- Nagy div -->
    <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-2 gap-4">

      <!-- Bejelentkezés -->
      <div class="border border-gray-300 bg-[#FEFAE0] p-6 rounded-xl shadow-sm">
        <h2 class="text-2xl font-semibold text-center text-[#283618] mb-6">
          Belépés
        </h2>

        <FormKit type="form" :actions="false" class="space-y-6">

          <!-- Email input -->
          <div class="my-2">
            <FormKit type="email" label="E-mail" label-class="text-[#283618] text-2xl" placeholder="E-mail"
              input-class="p-3 border border-gray-300 rounded-md w-full"/>
          </div>

          <!-- Jelszó input -->
          <div class="my-2">
            <FormKit type="password" label="Jelszó" label-class="text-[#283618] text-2xl" placeholder="Jelszó"
              input-class="p-3 border border-gray-300 rounded-md w-full"/>
          </div>

          <!-- Gomb -->
          <div class="flex justify-center">
            <button type="submit" @click="handleLogin"
              class="px-6 my-3 py-2 bg-[#283618] text-2xl text-[#FEFAE0] rounded-lg font-semibold">
              Bejelentkezés
            </button>
          </div>
        </FormKit>
      </div>

      <!-- Regisztráció -->
      <div class="border p-6 rounded-xl border-gray-300 bg-[#FEFAE0] shadow-sm flex flex-col justify-center text-center">
        <h2 class="text-2xl font-semibold text-[#283618] mb-4">
          Regisztráció
        </h2>

        <p class="mb-8 text-[#283618] text-xl">
          Nincs még BuzzShop Webáruház regisztrációd?<br />
          Kattints az alábbi gombra és regisztrálj!
        </p>

        <div class="flex justify-center">
          <RouterLink to="/register">
            <button type="button"
              class="px-6 py-2 bg-[#283618] text-[#FEFAE0] rounded-lg font-semibold hover:bg-sky-700 transition">
              Regisztráció
            </button>
          </RouterLink>
        </div>
      </div>
    </div>
  </BaseLayout>
</template>

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue'
</script>
