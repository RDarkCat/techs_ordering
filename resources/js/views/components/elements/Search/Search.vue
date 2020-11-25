<template>
    <div>
        <SearchInput />
        <hr>
        <FilterBlock />
    </div>
</template>

<script>
import SearchInput from "./elements/SearchInput";
import FilterBlock from "./elements/Filter/FilterBlock";


export default {
    name: "Search",
    components: {
        SearchInput,
        FilterBlock
    },
    data() {
        return {
            search: null
        }
    }
}
</script>

<style scoped>

</style>
