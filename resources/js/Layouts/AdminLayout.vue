<script setup>
</script>
<template>
    <div class="dark-layout">
        <div>
            <Nav />
            <Aside />
            <main>
                <section>
                    <slot></slot>
                </section>
            </main>
        </div>
        <ButtonUp>

        </ButtonUp>
    </div>
</template>
<style scoped>
    .dark-layout {
        background-color: #161d31;
        height: 100vh;
    }
</style>
