<template>
    <div>
        <SearchInput />
        <CategoriesDropdown />
        <Tags />
        <SortBy />
    </div>
</template>

<script>
import SearchInput from "./elements/SearchInput.vue";
import CategoriesDropdown from "./elements/Filter/elements/CategoriesDropdown";
import Tags from "./elements/Filter/elements/Tags/Tags";
import SortBy from "./elements/Filter/elements/SortBy";

export default {
    name: "SearchBlock",
    components: {
        SearchInput,
        CategoriesDropdown,
        Tags,
        SortBy
    }
}
</script>

<style scoped>

</style>
