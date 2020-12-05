<template>
    <label>
        <input type="text"
               v-model="queryString"
               v-on:keyup="handleSearchKeyUP" />
        <button @click="handleSearchClick">Поиск</button>
    </label>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "SearchInput",
    data() {
        return {
            queryString: ''
        }
    },
    computed: {
        ...mapGetters({
            getFilterProps: 'promos/getFilterProps'
        })
    },
    methods: {
        ...mapActions({
            setQueryString: 'promos/setQueryString',
            responsePromos: 'promos/responsePromos',
            sortBy: 'promos/setSort',
        }),
        handleSearchClick() {
            this.setQueryString(this.queryString);
            this.sortBy(this.getFilterProps.sort);
            this.responsePromos();
        },
        handleSearchKeyUP() {
            if (this.queryString.length > 2) {
                this.setQueryString(this.queryString);
                this.responsePromos();
            }
        }
    }
}
</script>

<style scoped>

</style>
