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
export default {
    name: "SearchInput",
    data() {
        return {
            queryString: ''
        }
    },
    methods: {
        handleSearchClick() {
            if (this.query.length > 1) {
                this.$emit('handleSearch', this.queryString);
            } else {
                this.queryString = '';
            }
        }
    }
}
</script>

<style scoped>

</style>
