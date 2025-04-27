<template>
    <table class="bg-indigo-500 mt-5 mx-auto w-10/12 rounded-2xl">
        <thead>
            <tr>
                <th class="text-white p-2">Állat neve</th>
                <th class="text-white p-2">Fajta</th>
                <th class="text-white p-2">Kor</th>
                <th class="text-white p-2">Megtekintés</th>
            </tr>
        </thead>

        <tbody>
            <tr v-for="allat in allatStore.allatok" :key="allat">
                <td class="text-white mb-4 text-center align-baseline">{{ allat.nev }}</td>
                <td class="text-white mb-4 text-center align-baseline">{{ allat.fajta }}</td>
                <td class="text-white mb-4 text-center align-baseline">{{ allat.kor }}</td>
                <td class="text-center align-base">
                    <RouterLink :to="`/main/${allat.id}/`">
                        <button class="bg-white mb-4 text-indigo-500 rounded p-1">
                            Megtekintés
                        </button>
                    </RouterLink>
                </td>

            </tr>
        </tbody>
    </table>
</template>

<script setup>
import { useRoute } from 'vue-router';
import { useAllatStore } from '@stores/AllatStore';

const allatStore = useAllatStore();
const route = useRoute();
</script>