<template>
    <BaseLayout>
        <h1 class="font-bold text-3xl text-white pt-3">Üdvözöljük, {{ userName }}!</h1>
        <h1 class="text-white">Cleaner main page</h1>
    </BaseLayout>
</template>

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue'
import { useUserStore } from '@stores/UserStore.js'
import { onMounted, ref } from 'vue';

// Változók
const userStore = useUserStore();
const userName = ref('');
onMounted(async () => {
    const userId = sessionStorage.getItem('userId');

    if(userId){
        await userStore.getOneUser(userId);
        userName.value = userStore.user?.nev || 'Névtelen'; 
    }
})
</script>