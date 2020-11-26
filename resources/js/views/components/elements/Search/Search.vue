<template>
    <div>
        <SearchInput />
        <hr>
        <a href="#" v-on:click.prevent="filterBlockVision=!filterBlockVision">FilterBlock</a>
        <FilterBlock v-if="filterBlockVision" />
    </div>
</template>

<script>
import SearchInput from "./elements/SearchInput.vue";
import FilterBlock from "./elements/Filter/FilterBlock.vue";


export default {
    name: "Search",
    components: {
        SearchInput,
        FilterBlock
    },
    data() {
        return {
            search: null,
            filterBlockVision: false
        }
    }
}
</script>

<style scoped>

</style>
