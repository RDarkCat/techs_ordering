<template>
    <ul>
        <CategoriesListItem
            is="CategoriesListItem"
            v-for="category in categories"
            v-bind:category="category"
            v-bind:key='category.id'
        ></CategoriesListItem>
    </ul>
</template>

<script>
import CategoriesListItem from "./CategoriesListItem.vue";

export default {
    name: "CategoriesList",
    components: {
      CategoriesListItem
    },
    props: [
        'categories'
    ]
}
</script>

<style scoped>

</style>
