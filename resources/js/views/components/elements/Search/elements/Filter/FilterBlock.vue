<template>
    <div>
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
import Categories from "./elements/Categories/Categories";
import Characteristics from "./elements/Characteristics/Characteristics";
import Dates from "./elements/Dates";
import Prices from "./elements/Prices";
import Tags from "./elements/Tags/Tags";

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
