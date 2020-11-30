<template>
    <div>
        <SearchInput
            @handleSearch="handleSearch"
        />
        <br>

        <FilterBlock
            v-if="filterBlockVision"
            @handleFilterProps="handleFilterProps"
        />
    </div>
</template>

<script>
import SearchInput from "./elements/SearchInput.vue";
import FilterBlock from "./elements/Filter/FilterBlock.vue";

import { mapActions, mapGetters } from "vuex";

export default {
    name: "SearchBlock",
    components: {
        SearchInput,
        FilterBlock
    },
    data() {
        return {
            searchProps: {},
            filterBlockVision: true
        }
    },
    computed: {

    },
    methods: {
        ...mapActions({
            setFilterProps: 'promos/setFilterProps',
            responsePromos: 'promos/responsePromos'
        }),
        ...mapGetters({
            getFilterProps: 'promos/getFilterProps'
        }),
        handleSearch(queryString) {
            this.searchProps.queryString = queryString;
            this.setFilterProps(this.searchProps);
            localStorage.setItem('filterProps', this.filterProps)
            this.responsePromos();
        },
        handleFilterProps(filterProps) {
            this.searchProps.filterProps = filterProps;
        }
    },
    mounted() {
        //this.search({1: 1, 2: 2, 3: 3});
    }
}
</script>

<style scoped>

</style>
