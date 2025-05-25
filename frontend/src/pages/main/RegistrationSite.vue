<template>
    <BaseLayout>
        <h1 class="text-3xl pt-5 text-white shadow-gray-400 font-bold text-center">Regisztráció</h1>

        <!-- Form div -->
        <div class="bg-white w-6/12 mx-auto mt-5 rounded-lg">

            <FormKit type="form" :actions="false" @submit="handleRegistration">

                <!-- Név kitöltés -->
                <div class="p-3 mx-auto">
                    <FormKit v-model="nev" validation="required" type="text" label="Mi a neved, Gazdi?" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>
                
                <!-- Cím kitöltés -->
                <div class="p-3">
                    <FormKit v-model="cim" validation="required" type="text" label="Mondd el a címed lécci léccii..?" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <!-- Telefonszám kitöltés -->
                <div class="p-3">
                    <FormKit v-model="telefon" validation="required" type="text" label="Mondd má el a számod is" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <!-- Email kitöltés -->
                <div class="p-3">
                    <FormKit v-model="email" validation="required" type="email" label="Email idő!" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <!-- Jelszó kitöltés -->
                <div class="p-3">
                    <FormKit v-model="password" validation="required" type="password" label="Jöhet a jelszó" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <div class="p-3">
                    <button class="mx-auto bg-cyan-800 text-2xl p-2 rounded-lg text-white" type="submit">Regisztráció beküldése</button>
                </div>
            </FormKit>
        </div>
    </BaseLayout>
</template>

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue';
import { useGazdiStore } from '@stores/GazdiStore';
import { ref } from 'vue';

const gazdiStore = useGazdiStore();

const nev = ref('');
const cim = ref('');
const telefon = ref('');
const email = ref('');
const password = ref('');

const handleRegistration = async () => {
    const userData = {
        nev: nev.value,
        cim: cim.value,
        telefon: telefon.value,
        email: email.value,
        password: password.value
    }

    await gazdiStore.postGazdi(userData);
    alert('siker')
};

</script>