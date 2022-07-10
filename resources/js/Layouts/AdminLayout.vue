<script setup>
import Nav from '../Components/NavBarComponent.vue'
import Aside from '../Components/AsideComponent.vue'
</script>
<template>
    <div class="dark-layout nav-md">
        <div class="body">
            <div class="main_container">
                <Aside />
                <Nav />
                <main>
                    <section>
                        <slot></slot>
                    </section>
                </main>
            </div>
        </div>
    </div>
</template>
<style scoped>

</style>
