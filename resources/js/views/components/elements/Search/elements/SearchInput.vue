<template>
    <div>
        Search <input type="text" v-model="search" >
        {{ search }}
    </div>
</template>

<script>
export default {
    name: "SearchInput",
    data() {
        return {
            search: null
        }
    }
}
</script>

<style scoped>

</style>
