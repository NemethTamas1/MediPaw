<template>
    <BaseLayout>
        <div id="banner">
            <h1>Üdvözöljük a MediPaw állatorvosi szakrendelő honlapján!</h1>
        </div>
    </BaseLayout>
</template>

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue'
</script>

<style>
#banner {
    background-image: url('@assets/banners/MediPawBackground.jpg');
    background-size: cover;
  background-position: center;
  width: 100%;
  height: 100vh;
  margin: auto;
  padding: 0;
}
</style>