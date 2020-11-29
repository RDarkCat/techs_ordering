<template>
    <ul>
        <CategoriesListItem
            is="CategoriesListItem"
            v-for="category in categories"
            v-bind:selected="selected"
            v-bind:category="category"
            v-bind:key='category.id'
            @categoryChecked="categoryChecked"
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
        'categories',
        'selected'
    ],
    methods: {
        categoryChecked(category) {
            this.$emit('categoryChecked', category);
        }
    }
}
</script>

<style scoped>

</style>
