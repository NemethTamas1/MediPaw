<template>
    <BaseLayout>
        <h1 class="text-3xl pt-5 text-white shadow-gray-400 font-bold text-center">Regisztráció</h1>

        <!-- Form div -->
        <div class="bg-white w-6/12 mx-auto mt-5 rounded-lg">

            <FormKit type="form" :actions="false" @submit="handleRegistration">

                <!-- Név kitöltés -->
                <div class="p-3 mx-auto">
                    <FormKit v-model="name" validation="required" type="text" label="Név" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>
                
                <!-- Cím kitöltés -->
                <div class="p-3">
                    <FormKit v-model="address" validation="required" type="text" label="Cím" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <!-- Telefonszám kitöltés -->
                <div class="p-3">
                    <FormKit v-model="phone" validation="required" type="text" label="Telefonszám" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <!-- Email kitöltés -->
                <div class="p-3">
                    <FormKit v-model="email" validation="required" type="email" label="Email" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
                </div>

                <!-- Jelszó kitöltés -->
                <div class="p-3">
                    <FormKit v-model="password" validation="required" type="password" label="Jelszó" input-class="p-2 w-8/12 border border-black rounded-lg" label-class="text-2xl"/>
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
import { useOwnerStore } from '@stores/OwnerStore';
import { ref } from 'vue';

const ownerStore = useOwnerStore();

const name = ref('');
const address = ref('');
const phone = ref('');
const email = ref('');
const password = ref('');

const handleRegistration = async () => {
    const userData = {
        name: name.value,
        address: address.value,
        phone: phone.value,
        email: email.value,
        password: password.value
    }

    await ownerStore.postOwner(userData);
    alert('siker')
};

</script>