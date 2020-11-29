<template>
    <label>
        <input type="text"
               v-model="query"
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
            query: ''
        }
    },
    methods: {
        handleSearchClick() {
            if (this.query.length > 1) {
                this.$emit('queryString', this.query);
            }
        }

    }
}
</script>

<style scoped>

</style>
