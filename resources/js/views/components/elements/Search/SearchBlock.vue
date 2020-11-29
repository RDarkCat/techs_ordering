<template>
    <div>
        <SearchInput
            @queryString="queryString"
        />
        <br>

        <a href="#"
           v-on:click.prevent="filterBlockVision=!filterBlockVision"
        >
            Расширенный поиск
        </a>

        <FilterBlock
            v-if="filterBlockVision"
            @filterProps="filterProps"
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
            filterBlockVision: false
        }
    },
    methods: {
        ...mapActions({
            setFilterProps: 'promos/setFilterProps',
            responsePromos: 'promos/responsePromos'
        }),
        ...mapGetters({
            getFilterProps: 'promos/getFilterProps'
        }),
        queryString(query) {
            this.searchProps.query = query;
            console.log(this.searchProps);
            this.setFilterProps(this.searchProps);
            this.responsePromos();
        },
        filterProps(filterProps) {
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
