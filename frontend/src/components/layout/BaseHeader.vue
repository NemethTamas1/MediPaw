<template>
  <nav class="bg-indigo-500 text-white">
    <div class="flex p-3 border-b-2 flex-wrap">
      <RouterLink to="" class="flex items-center space-x-3">
        <span class="self-center text-2xl font-semibold pr-10">Állatorvosi Rendelő</span>
      </RouterLink>

      <RouterLink to="/" class="flex items-center space-x-3">
        <span class="self-center text-1xl font-semibold pr-4">Főoldal</span>
      </RouterLink>

      <button class="block md:hidden" @click="toggleMenu">
        <svg
          class="w-5 h-5"
          aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 17 14"
        >
          <path
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15"
          />
        </svg>
      </button>
    </div>
  </nav>
</template>

<script>
export default{
  data(){
    return{
      menuOpen: false
    }
  },
  methods:{
    toggleMenu(){
      this.menuOpen = !this.menuOpen
    }
  }
}
</script>