<template>
    <div>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <Navigation />
    </div>
</template>

<script>
import Navigation from "./elements/Navigation.vue";

export default {
    name: "Header",
    components: {
        Navigation
    }
}
</script>

<style scoped>

</style>
