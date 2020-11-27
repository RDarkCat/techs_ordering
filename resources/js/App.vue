<template>
    <div>
        <Header />
        <div v-if="$route.name==='home'">
            <HeadImage />
        </div>
        <div v-else>
            <Breadcrumbs />
            <hr>
            <Search />
        </div>
        <hr>
        <router-view />
        <hr>
        <Footer />
    </div>
</template>

<script>
import Header from './views/components/elements/Header/Header.vue';
import Breadcrumbs from "./views/components/elements/Breadcrumbs.vue";
import HeadImage from "./views/components/elements/HeadImage.vue";
import Search from "./views/components/elements/Search/Search.vue";
import Footer from './views/components/elements/Footer/Footer.vue';

export default {
    name: "App",
    components: {
        Header,
        Breadcrumbs,
        HeadImage,
        Search,
        Footer
    },
    created() {


    }
}
</script>

<style lang="css" scoped>

</style>
