<template>
    <div>
        <Header />
        <hr>
        <router-view />
        <hr>
        <Footer />
    </div>
</template>

<script>
import Header from './views/components/Header.vue';
import Footer from './views/components/Footer.vue';

export default {
    name: "App",
    components: {
        Header,
        Footer
    },
    created() {

    }
}
</script>

<style scoped>

</style>
