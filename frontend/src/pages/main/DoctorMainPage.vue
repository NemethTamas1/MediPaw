<template>
    <BaseLayout>
        <div v-if="!isLoading">
            <h1 class="font-bold text-3xl text-white pt-3">Üdvözöljük, {{ userName }}!</h1>
            <RendeloCard v-if="rendelo"
            :rendeloCim="rendelo.cim"
            :rendeloNyitvatartas="rendelo.nyitvatartas"
            :rendeloId="rendelo.id"
            />
        </div> 
        <div v-else>
            <BaseSpinner />
        </div>
    </BaseLayout>
</template>

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue'
import BaseSpinner from '@components/layout/BaseSpinner.vue';
import RendeloCard from '@components/RendeloCard.vue';

import { useUserStore } from '@stores/UserStore.js'
import { useRendeloStore } from '@stores/RendeloStore.js';
import { onMounted, ref } from 'vue';

// Változók
const userStore = useUserStore();
const rendeloStore = useRendeloStore();

const userName = ref('');
const rendelo = ref(null);
const isLoading = ref(false);

// Függvények
onMounted(async () => {
    isLoading.value = true;

    const userId = sessionStorage.getItem('userId');
    if (userId) {
        await userStore.getOneUser(userId);
        userName.value = userStore.user?.nev || 'Névtelen';
        rendelo.value = await rendeloStore.getRendeloByUserId(userId);
        console.log(rendelo)
    }


    isLoading.value = false;
})

</script>