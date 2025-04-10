<template>
<BaseLayout>
    <EditForm />
</BaseLayout>
</template>

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue'
import EditForm from '@components/EditForm.vue';
import { useRoute } from 'vue-router';

const route = useRoute();
console.log(route.params.id)
</script>