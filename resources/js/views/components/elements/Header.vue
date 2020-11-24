<template>
    <div>
        <div id="logo">
            <router-link
                to="/home"
            >
                LOGO
            </router-link>
        </div>
        <Auth />
        <Navigation />
    </div>
</template>

<script>
import Navigation from "./Navigation";
import Auth from "./Auth/Auth";

export default {
    name: "Header",
    components: {
        Auth,
        Navigation
    }
}
</script>

<style scoped>

</style>
