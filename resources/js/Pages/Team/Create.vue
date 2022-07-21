<script setup>
import { Head , useForm} from '@inertiajs/inertia-vue3';
import Layout from '../../Layouts/AdminLayout.vue';
import Input from '../../Components/InputComponent.vue';
import InputError from '../../Components/InputErrorComponent.vue';
import Label from '../../Components/LabelComponent.vue';
import Button from '../../Components/ButtonComponent.vue';

defineProps(['errors']);

const form = useForm({
    name: ''
});

const submit = () => {
    form.post(route('dashboard.team.index'));
};
</script>

<template>
    <Head title=""/>
    <Layout>
        <form @submit.prevent="submit">
            <div class="grid grid-cols-2 mt-12">
                <div class="flex flex-col space-y-3">
                    <Label for="name" value="نام تیم :" />
                    <Input id="name" type="text" v-model="form.name" required autofocus autocomplete="name" />
                    <InputError :message="errors.name" />
                </div>
                <div class="flex items-stretch justify-center">
                    <Button class="">ذخیره اطلاعات</Button>
                </div>
            </div>
        </form>
    </Layout>
</template>

<style scoped>

</style>
