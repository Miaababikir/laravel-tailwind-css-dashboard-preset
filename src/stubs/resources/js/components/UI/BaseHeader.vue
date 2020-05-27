<template>
    <header class="bg-white shadow">
        <div class="container mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold leading-tight text-gray-900" v-text="title"></h1>
        </div>
    </header>
</template>

<script>
    export default {
        name: "BaseHeader",
        props: ['title']
    }
</script>

<style scoped>

</style>
