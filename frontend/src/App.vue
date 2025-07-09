<script setup>
import { onMounted } from 'vue';

import { useArtistStore } from '@stores/ArtistStore';

const artistStore = useArtistStore();

onMounted(async() => {
  await artistStore.getArtists();
})
</script>

<template>
  <RouterView />
</template>
