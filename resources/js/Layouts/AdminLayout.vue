<script setup>
</script>
<template>
    <div class="dark-layout">
        <Aside />
        <main>
            <Nav />
            <section>
                <slot></slot>
            </section>
        </main>
    </div>
</template>
<style scoped>
    .dark-layout {
        background-color: #161d31;
        height: 100vh;
    }
</style>
