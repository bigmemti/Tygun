<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import {faEdit} from '@fortawesome/free-solid-svg-icons';
import Layout from '../../Layouts/AdminLayout.vue';

defineProps(['team']);
</script>

<template>
    <Head title=""/>
    <Layout>
        <div class="grid grid-col-2 mt-6">
            <div class="flex">
                <p class="text-2xl ">نام تیم :</p> &nbsp;
                <span class="text-2xl font-bold">{{team.name}}</span>
            </div>
        </div>
    </Layout>
</template>

<style scoped>

</style>
