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
import Logo from "./elements/Logo";
import Location from "./elements/Location";
import Navigation from "./elements/Navigation";
import Auth from "../Auth/Auth";

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
