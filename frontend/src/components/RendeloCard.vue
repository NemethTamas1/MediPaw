<template>
  <div class="card bg-white w-3/12 p-4 mt-5 rounded-lg">
    <div class="card-body">
      <h5 class="card-title text-center font-bold"> {{ rendeloCim }} </h5>
      <p class="card-text text-center"> Nyitvatartás: <b>{{ rendeloNyitvatartas }}</b>  </p>
    </div>
    <div class="mt-4 text-center">
      <a href="#" class="text-center btn btn-primary bg-black text-white p-2 rounded-lg" @click="goToRendelo">Megtekintés</a>
    </div>
  </div>
</template>

<script setup>
import { useRouter } from 'vue-router';
const props = defineProps({
  rendeloCim: {type: String, required: true},
  rendeloNyitvatartas: {type: String, required: true},
  rendeloId: {type: [String, Number], required: true}
})


const router = useRouter();
const goToRendelo = () => {
  console.log('átirányítás folyamatban...')
  router.push(`/rendelo/${props.rendeloId}`)
}
</script>
