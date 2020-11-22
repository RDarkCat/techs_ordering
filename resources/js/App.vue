<template>
    <div>
        <header />
        <hr>
        <router-view />
        <hr>
        <footer />
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
