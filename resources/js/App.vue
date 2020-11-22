<template>
    <div>
        <Feader />
        <hr>
        <router-view />
        <hr>
        <Footer />
    </div>
</template>

<script>
import Header from './views/components/Header';
import Footer from './views/components/Footer';

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
