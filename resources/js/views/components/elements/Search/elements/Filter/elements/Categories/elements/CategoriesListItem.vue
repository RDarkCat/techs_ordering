<template>
    <li>
        <div v-if="category.children">
            <a href="#" v-on:click.prevent="show=!show">
                {{ category.name }}
            </a>
        </div>

        <div v-else v-on:click="categoryChecked(category)">
            {{ category.name }}
            <span v-if="selected === category">X</span>
        </div>

        <div v-if="show">
            <ul v-if="category.children">
                <CategoriesListItem
                    is="CategoriesListItem"
                    v-for="item in category.children"
                    v-bind:selected="selected"
                    v-bind:category="item"
                    v-bind:key='item.id'
                    @categoryChecked="categoryChecked"
                ></CategoriesListItem>
            </ul>
        </div>

    </li>
</template>

<script>
export default {
    name: "CategoriesListItem",
    props: [
        'category',
        'selected'
    ],
    data() {
        return {
            show: false
        }
    },
    methods: {
        categoryChecked(category) {
            this.$emit('categoryChecked', category);
        }
    }
}
</script>

<style scoped>

</style>
