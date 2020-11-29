<template>
    <div>
        <SearchInput
            @queryString="query"
        />
        <br>

        <a href="#"
           v-on:click.prevent="filterBlockVision=!filterBlockVision"
        >
            Расширенный поиск:
        </a>

        <FilterBlock
            v-if="filterBlockVision"
            @filter="filter"
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
            localStorageKey: 'filter',
            filterProps: {},
            filterBlockVision: true
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
        query(query) {
            this.filterProps.query = query;
            console.log(this.filterProps);
            this.setFilterProps(this.filterProps);
            this.setFilterLocal();
            this.responsePromos();
        },
        filter(filterProps) {
            this.filterProps.filterProps = filterProps;
            this.setFilterProps(this.filterProps);
            this.setFilterLocal();
            this.responsePromos();
        },
        setFilterLocal() {
            localStorage.setItem(this.localStorageKey, JSON.stringify(this.filterProps));
        },
        clearLocalFilter() {
            localStorage.removeItem('filter');
        },
        getLocalFilter () {
            return JSON.parse(localStorage.getItem('filter') || "[]");
        }
    },
    mounted() {
        this.filterProps = this.getLocalFilter();
    }
}
</script>

<style scoped>

</style>
