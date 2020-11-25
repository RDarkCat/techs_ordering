<template>
    <li>
        <div v-if="category.parent_id !== null">
            <div v-on:click="clicked(category.name)">
                {{ category.name }}
            </div>
        </div>
        <div v-else>
                {{ category.name }}
        </div>

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
    ],
    methods: {
        clicked(data) {
            console.log(data);
        }
    }
}
</script>

<style scoped>

</style>
