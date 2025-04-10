<template>
    <FormKit 
      type="form" 
      :actions="false" 
      form-class="bg-indigo-500 rounded-lg w-3/12 mx-auto mt-10 p-5 space-y-4"
    >
      <FormKit 
        input-class="ml-5 rounded-lg w-10/12" 
        label-class="text-white text-xl ml-5" 
        type="text" 
        label="Neve" 
        v-model="allatStore.allat.nev"
      />
      
      <FormKit 
        input-class="ml-5 rounded-lg w-10/12" 
        label-class="text-white text-xl ml-5" 
        type="number" 
        label="Kora" 
        v-model="allatStore.allat.kor"
      />
  
      <FormKit
        type="radio"
        label="Veszettség elleni oltás"
        v-model="allatStore.allat.oltva"
        :options="[
            { label: 'Igen', value: true },
            { label: 'Nem', value: false }
        ]"
        label-class="text-white text-xl ml-5"
        outer-class="ml-5"
        option-class="inline-flex items-center mr-5 text-white text-lg"
        />
  
      <FormKit 
        type="textarea" 
        label="Leírás" 
        input-class="ml-5 rounded-lg w-10/12 h-40 resize-none p-2" 
        label-class="text-white text-xl ml-5"
        v-model="allatStore.allat.leiras"
      />
  
      <button class="bg-white text-indigo-500 p-2 ml-5 mb-5 rounded shadow hover:bg-indigo-100 transition">
        Mentés
      </button>
    </FormKit>
  </template>
  

<script setup>
import { useAllatStore } from '@stores/AllatStore';
import { useRoute } from 'vue-router';
const route = useRoute();
const allatStore = useAllatStore();


allatStore.getAllat(route.params.id);
</script>