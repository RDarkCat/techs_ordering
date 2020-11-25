<template>
    <div>
        <Header />
        <hr>
        <Breadcrumbs />
        <hr>
        <Search />
        <hr>
        <router-view />
        <hr>
        <Footer />
    </div>
</template>

<script>
import Header from './views/components/elements/Header/Header.vue';
import Breadcrumbs from "./views/components/elements/Breadcrumbs";
import Search from "./views/components/elements/Search/Search";
import Footer from './views/components/elements/Footer/Footer.vue';

export default {
    name: "App",
    components: {
        Header,
        Breadcrumbs,
        Search,
        Footer
    },
    created() {

    }
}
</script>

<style scoped>

</style>
