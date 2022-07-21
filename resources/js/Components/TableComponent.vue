<script setup>
</script>
<template>
    <table class="mx-auto border border-black w-full">
        <thead>
            <tr class="grid grid-cols-8">
                <slot name="header"/>
            </tr>
        </thead>
        <tbody>
            <slot name="body"/>
        </tbody>
    </table>
</template>
<style scoped>
</style>
