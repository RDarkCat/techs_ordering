<template>
    <div>
        <Logo />
        <Location />
        <hr>
        <Auth />
        <hr>
        <Navigation />
        <hr>
        <Search />
        <hr>
        <Breadcrumbs />
    </div>
</template>

<script>
import Logo from "./elements/Logo";
import Location from "./elements/Location";
import Navigation from "./elements/Navigation";
import Auth from "../Auth/Auth";
import Breadcrumbs from "./elements/Breadcrumbs";
import Search from "../Search/Search";

export default {
    name: "Header",
    components: {
        Logo,
        Location,
        Auth,
        Navigation,
        Breadcrumbs,
        Search
    }
}
</script>

<style scoped>

</style>
