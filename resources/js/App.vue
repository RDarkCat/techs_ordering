<template>
    <div>
        <Header />
        <div v-if="$route.name==='home'">
            <HeadImage />
        </div>
        <router-view />
        <Footer />
    </div>
</template>

<script>
import Header from './views/components/elements/Header/Header.vue';
import HeadImage from "./views/components/elements/HeadImage.vue";
import Footer from './views/components/elements/Footer/Footer.vue';

export default {
    name: "App",
    components: {
        Header,
        HeadImage,
        Footer
    },
    created() {


    }
}
</script>

<style lang="css" scoped>

</style>
