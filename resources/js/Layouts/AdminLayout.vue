<script setup>
import Nav from '../Components/NavBarComponent.vue'
import Aside from '../Components/AsideComponent.vue'
import { ref } from 'vue';


let isMd = ref(true);
</script>
<template>
    <div class="dark-layout" :class="(isMd) ? 'nav-md' : 'nav-sm'">
        <div class="body">
            <div class="main_container">
                <Aside/>
                <div class="right_col" role="main">
                    <Nav  @changeBar="isMd = ! isMd"/>
                    <main>
                        <section>
                            <slot></slot>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>

</style>
