<template>
    <div>
        <div id="logo">
            <router-link
                to="/home"
            >
                LOGO
            </router-link>
        </div>
        <navigation />
    </div>
</template>

<script>
import Navigation from "./Navigation";

export default {
    name: "Header",
    components: {
        Navigation
    }
}
</script>

<style scoped>

</style>
