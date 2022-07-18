<script setup>
import { computed } from 'vue';

const emit = defineEmits(['update:checked']);

const props = defineProps({
    checked: {
        type: [Array, Boolean],
        default: false,
    },
    value: {
        default: null,
    },
});

const proxyChecked = computed({
    get() {
        return props.checked;
    },

    set(val) {
        emit("update:checked", val);
    },
});
</script>

<template>
    <input type="checkbox" :value="value" v-model="proxyChecked"
           class="rounded border-black text-[#ed2553] shadow-sm focus:border-indigo-300 focus:ring focus:ring-[#ed2553] bg-[#161d31] focus:ring-opacity-50">
</template>
