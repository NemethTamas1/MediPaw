<script setup>
import { useAllatStore } from '@stores/AllatStore';
import { onMounted } from 'vue';

const allatStore = useAllatStore();

onMounted(async()=>{
  await allatStore.getAllats();
})
</script>

<template>
  <RouterView />
</template>
