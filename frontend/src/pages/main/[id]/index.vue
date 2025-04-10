<template>
    <BaseLayout>
      <div class="w-10/12 bg-indigo-500 rounded-lg flex mx-auto mt-7 p-6 text-white">
        <div class="flex w-full">
          <div class="w-1/3 pr-4">
            <img
              :src="imagePath"
              alt="Állat képe"
              class="rounded w-full h-auto"
            />
          </div>
          <div class="w-2/3">
            <h1 class="font-bold text-2xl mb-2 text-center">Leírás</h1>
            <h2 class="text-lg">Neve: {{ allatStore.allat?.nev }}</h2>
            <p>Fajta: {{ allatStore.allat?.fajta }}</p>
            <p>Kor: {{ allatStore.allat?.kor }} éves</p>
            <p>Oltva: {{ allatStore.allat?.oltva }}</p>
            <p>Kezelést végző orvosa: Dr. Trükkös Tihamér</p>

            <h2 class="pt-3 font-bold text-white">Részletek: </h2>
            <p>{{ allatStore.allat?.leiras }}</p>

            <RouterLink :to="`/main/${route.params.id}/edit/`">
                <button class="bg-yellow-600 p-2 rounded mt-3">Módosítás</button>
            </RouterLink>
          </div>
        </div>
      </div>
    </BaseLayout>
  </template>
  

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue';
import { RouterLink, useRoute } from 'vue-router';
import { useAllatStore } from '@stores/AllatStore';
import { computed } from 'vue';

const route = useRoute();
const allatStore = useAllatStore();

allatStore.getAllat(route.params.id);

const images = import.meta.glob('@/assets/images/**/*.webp', { eager: true });

const currentId = computed(() => route.params.id);

const imagePath = computed(() => {
    const key = Object.keys(images).find(path =>
        path.includes(`${currentId.value}.webp`)
    )
    return key ? images[key].default : '';
});
</script>