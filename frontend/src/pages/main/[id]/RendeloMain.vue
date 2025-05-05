<template>
    <BaseLayout>
      <div v-if="isLoading">
        <BaseSpinner />
      </div>

      <div v-else>
        <div class="bg-white w-10/12 rounded-lg mx-auto mt-10">
          <h1 class="text-3xl text-black text-center mt-5">{{ rendelo?.cim }}</h1>
          <p class="text-lg text-black">Nyitvatartási ideje: {{ rendelo?.nyitvatartas }}</p>
        </div>
      </div>
    </BaseLayout>
  </template>
  

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue';
import BaseSpinner from '@components/layout/BaseSpinner.vue';

import { useRendeloStore } from '@stores/RendeloStore';
import { onMounted, ref } from 'vue';
import { useRoute } from 'vue-router';

// Változók
const rendeloStore = useRendeloStore();
const isLoading = ref(false);
const route = useRoute();
const rendelo = ref(null);

// Függvények
onMounted(async() => {
  isLoading.value = true; 

  const id = route.params.id;
  if(id){
    rendelo.value = await rendeloStore.getRendeloByUserId(id); // Ugyan nem UserId, de ugyan azt csinálja.
  }

  isLoading.value = false;
});

</script>