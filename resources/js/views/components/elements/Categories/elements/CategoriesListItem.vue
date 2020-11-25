<template>
    <li>
        {{ category.name }}
        <ul v-if="category.children">
            <CategoriesListItem
                is="CategoriesListItem"
                v-for="item in category.children"
                v-bind:category="item"
                v-bind:key='item.id'
            ></CategoriesListItem>
        </ul>
    </li>
</template>

<script>
export default {
    name: "CategoriesListItem",
    props: [
        'category'
    ]
}
</script>

<style scoped>

</style>
