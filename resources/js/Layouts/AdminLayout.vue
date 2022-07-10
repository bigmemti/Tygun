<script setup>
import Nav from '../Components/NavBarComponent.vue'
</script>
<template>
    <div class="dark-layout">
        <Aside />
        <Nav />
        <main>
            <section>
                <slot></slot>
            </section>
        </main>
    </div>
</template>
<style scoped>

</style>
