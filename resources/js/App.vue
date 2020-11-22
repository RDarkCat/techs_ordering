<template>
    <div>
        <Header />
        <hr>
        <router-view />
    </div>
</template>

<script>
import Header from './views/components/Header';

export default {
    name: "App",
    components: {
        Header
    },
    created() {

    }
}
</script>

<style scoped>

</style>
