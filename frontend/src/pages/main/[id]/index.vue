<template>
    <BaseLayout>
        <div class="w-10/12 bg-indigo-500 mx-auto mt-7">
            <div class="row">
                <div class="col-lg-3">
                    <!-- <img :src="" alt=""> -->
                </div>
                <div class="col-lg-9">Leírás</div>
            </div>
            <p>a</p>
        </div>
    </BaseLayout>
</template>

<script setup>
import BaseLayout from '@layouts/BaseLayout.vue';
import { useRoute } from 'vue-router';
import { useAllatStore } from '@stores/AllatStore';
import { computed } from 'vue';

const route = useRoute();
const allatStore = useAllatStore();
</script>