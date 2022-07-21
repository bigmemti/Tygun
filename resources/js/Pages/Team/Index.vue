<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import {faEdit,faTrash,faEye} from '@fortawesome/free-solid-svg-icons';
import Layout from '../../Layouts/AdminLayout.vue';
import Table from '../../Components/TableComponent.vue';
import { Inertia } from '@inertiajs/inertia'

defineProps({
    teams : Array
})



const destroy = (uuid) => {
    Alert.fire({
        title: 'آیا از حذف مطئن هستید؟',
        text: "شما دیر قادر به باز گردانید اطلاعات نخواهید بود!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'بله، حذف گردد.',
        cancelButtonText: 'خیر'
    }).then((result) => {
        if (result.isConfirmed) {
            Inertia.delete(route('dashboard.team.destroy', [uuid]),{
                onFinish: () => {
                    Toast.fire({
                        icon: 'success',
                        title: Inertia.page.props.flash.success
                    });
                }
            });
        }
    });
}

if(Inertia.page.props.flash.success) {
    Toast.fire({
        icon: 'success',
        title: Inertia.page.props.flash.success
    });
}
</script>

<template>
    <Head title=""/>
    <Layout>
        <Table>
            <template #header>
                <th class="border border-black p-3 text-2xl bg-[#3E5367] text-white">ردیف</th>
                <th class="border border-black p-3 text-2xl bg-[#3E5367] text-white col-span-6">نام تیم</th>
                <th class="border border-black p-3 text-2xl bg-[#3E5367] text-white">عملیات</th>
            </template>
            <template #body>
                <tr v-for="(team , index) in teams" :key="team.id" class="grid grid-cols-8">
                    <td class="border border-black p-3 text-center text-xl text-white">{{index + 1 }}</td>
                    <td class="border border-black p-3 text-center text-xl text-white col-span-6">{{team.name}}</td>
                    <td class="border border-black p-3 text-center text-xl text-white">
                        <Link :href="route('dashboard.team.edit', [team.uuid])" class="btn-warning btn"><Fa :icon="faEdit"></Fa></Link>
                        <a @click.prevent="destroy(team.uuid)" class="btn-danger btn"><Fa :icon="faTrash"></Fa></a>
                        <Link :href="route('dashboard.team.show', [team.uuid])" class="btn-info btn"><Fa :icon="faEye"></Fa></Link>
                    </td>
                </tr>
            </template>
        </Table>
    </Layout>
</template>

<style scoped>

</style>
