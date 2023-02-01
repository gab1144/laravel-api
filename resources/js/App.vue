<script>
    import Header from './partials/Header.vue'

    import Footer from './partials/Footer.vue'

    export default {
        name: 'App',
        components:{
            Header,
            Footer
        }
    }
</script>

<template>

    <Header />

    <main>
        <router-view></router-view>
    </main>

    <Footer />

</template>

<style lang="scss">
</style>
