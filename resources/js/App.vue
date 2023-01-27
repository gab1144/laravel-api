<script>
    import Header from './partials/Header.vue'

    export default {
        name: 'App',
        components:{
            Header
        }
    }
</script>

<template>

    <Header />

    <main>
        <router-view></router-view>
    </main>

</template>

<style lang="scss">
</style>
