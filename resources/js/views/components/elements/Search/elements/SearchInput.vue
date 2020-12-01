<template>
    <label>
        <input type="text"
               v-model="queryString"
               v-on:keyup="handleSearchClick"
        >
        <button
            @click="handleSearchClick"
        >
            Поиск
        </button>
    </label>
</template>

<script>
import { mapActions } from "vuex";

export default {
    name: "SearchInput",
    data() {
        return {
            queryString: ''
        }
    },
    methods: {
        ...mapActions({
            setQueryString: 'promos/setQueryString',
            responsePromos: 'promos/responsePromos'
        }),
        handleSearchClick() {
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
