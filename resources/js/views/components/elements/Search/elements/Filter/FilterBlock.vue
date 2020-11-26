<template>
    <div>
        <hr>
        <Categories />
        <hr>
        <Tags />
        <hr>
        <Characteristics />
        <hr>
        <Dates />
        <hr>
        <Prices />
        <hr>
        <test />
    </div>
</template>

<script>
import Categories from "./elements/Categories/Categories.vue";
import Characteristics from "./elements/Characteristics/Characteristics.vue";
import Dates from "./elements/Dates.vue";
import Prices from "./elements/Prices.vue";
import Tags from "./elements/Tags/Tags.vue";

import test from "./elements/test";

export default {
    name: "FilterBlock",
    components: {
        Categories,
        Characteristics,
        Dates,
        Prices,
        Tags,

        test
    }
}
</script>

<style scoped>

</style>
