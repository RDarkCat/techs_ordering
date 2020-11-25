<template>
    <div>
        <Logo />
        <Location />
        <Auth />
        <Navigation />
        <Breadcrumbs />
    </div>
</template>

<script>
import Logo from "./elements/Logo";
import Location from "./elements/Location";
import Navigation from "./elements/Navigation";
import Auth from "../Auth/Auth";
import Breadcrumbs from "./elements/Breadcrumbs";

export default {
    name: "Header",
    components: {
        Logo,
        Location,
        Auth,
        Navigation,
        Breadcrumbs
    }
}
</script>

<style scoped>

</style>
