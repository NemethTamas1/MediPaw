<template>
    <BaseLayout>
        <h1 class="text-3xl font-bold text-center my-10 text-[#FEFAE0]">
            Belépés / Regisztráció
        </h1>

        <!-- Nagy div -->
        <div class="max-w-screen-md mx-auto grid grid-cols-1">

            <!-- Regisztráció -->
            <div class="border border-gray-300 bg-[#FEFAE0] p-6 rounded-xl shadow-sm">
                <h2 class="text-xl font-semibold text-center text-white mb-6">Regisztráció</h2>

                <FormKit type="form" :actions="false" class="space-y-6" @submit="handleRegister">

                    <!-- Email input -->
                    <div class="my-3">
                        <FormKit type="email" label="E-mail" label-class="text-[#283618] text-xl" placeholder="E-mail *"
                            input-class="p-3 border border-[#283618] rounded-md w-full"
                            help="Az e-mail címed alapján azonosítunk és erre a címre küldjük a rendeléssel kapcsolatos értesítõket."
                            help-class="text-gray-500" v-model="formData.email"/>
                    </div>

                    <!-- Vezetnéknév input -->
                    <div class="my-3">
                        <FormKit type="text" label="Vezetéknév" label-class="text-[#283618] text-xl" placeholder="Vezetéknév *"
                            input-class="p-3 border border-[#283618] rounded-md w-full"
                            help="Vezeteknév. A csomagot erre a névre szállítjuk."
                            help-class="text-gray-500" v-model="formData.vnev"/>
                    </div>

                    <!-- Keresztnév input -->
                    <div class="my-3">
                        <FormKit type="text" label="Keresztnév" label-class="text-[#283618] text-xl" placeholder="Keresztnév *"
                            input-class="p-3 border border-[#283618] rounded-md w-full"
                            help="Keresztnév. A csomagot erre a névre szállítjuk."
                            help-class="text-gray-500" v-model="formData.knev"/>
                    </div>

                    <!-- Telefon input -->
                    <div class="my-3">
                        <FormKit type="text" label="Telefon" label-class="text-[#283618] text-xl" placeholder="Telefon *"
                            input-class="p-3 border border-[#283618] rounded-md w-full"
                            help="Telefon. Ezen a telefonszámon tudunk téged elérni a későbbiekben."
                            help-class="text-gray-500" v-model="formData.telefon"/>
                    </div>

                    <!-- Cím input -->
                    <div class="my-3">
                        <FormKit type="text" label="Cím" label-class="text-[#283618] text-xl" placeholder="Cím *"
                            input-class="p-3 border border-[#283618] rounded-md w-full"
                            help="Cím. Erre a címre fogjuk küldeni a pontokból jóváírt termékeket."
                            help-class="text-gray-500" v-model="formData.cim"/>
                    </div>

                    <!-- Jelszó input -->
                    <div class="my-3">
                        <FormKit type="password" label="Jelszó" label-class="text-[#283618] text-xl" placeholder="Jelszó *"
                            input-class="p-3 border border-[#283618] rounded-md w-full"
                            help="Jelszavad. Az itt beírt jelszóval tudsz majd bejelentkezni a rendszerünkbe."
                            help-class="text-gray-500" v-model="formData.password"/>
                    </div>

                    <!-- Gomb -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-6 mt-4 py-3 bg-[#283618] text-[#FEFAE0] rounded-lg font-semibold hover:bg-[#DDA15E] hover:text-[#283618] transition">
                            Regisztráció
                        </button>
                    </div>

                    
                </FormKit>
            </div>
        </div>
    </BaseLayout>
</template>

<script setup>
// Importok
import BaseLayout from '@layouts/BaseLayout.vue';
import { ref } from 'vue';
import { useUserStore } from '@stores/UserStore';
import { ToastService } from '@stores/ToastService';

// Változók
const userStore = useUserStore();

// FormKit saját object binding-ja
const formData = ref({
  email: '',
  vnev: '',
  knev: '',
  telefon: '',
  cim: '',
  password: ''
});

const handleRegister = async () => {
    console.log("kezdődik a regisztráció.. ")
  const credentials = {
    nev: formData.value.vnev + ' ' + formData.value.knev,
    cim: formData.value.cim,
    telefon: formData.value.telefon,
    email: formData.value.email,
    password: formData.value.password
  };

  try {
    console.log('credentials: ',credentials)

    await userStore.RegisterGuest(credentials);
    ToastService.showSuccess('A felhasználó sikeresen regisztrált!');
  } catch (error) {
    ToastService.showError('Hiba történt a regisztráció során!', error);
  }
};

</script>