<template>
    <div>
        <Logo />
        <Location />
        <hr>
        <Auth />
        <hr>
        <Navigation />
    </div>
</template>

<script>
import Logo from "./elements/Logo.vue";
import Location from "./elements/Location.vue";
import Navigation from "./elements/Navigation.vue";
import Auth from "../Auth/Auth.vue";

export default {
    name: "Header",
    components: {
        Logo,
        Location,
        Auth,
        Navigation
    }
}
</script>

<style scoped>

</style>
