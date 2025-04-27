<template>
    <BaseLayout>
        <h1 class="font-bold text-3xl text-white pt-3">Üdvözöljük, !</h1>
        <BaseTable />
    </BaseLayout>
</template>

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue'
import BaseTable from '@components/BaseTable.vue'

defineProps({
    name: String
})

</script>