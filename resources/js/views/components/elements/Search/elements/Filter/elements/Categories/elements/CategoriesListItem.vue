<template>
    <li>
        <div v-if="category.children">
            <div>
                <a href="#" v-on:click.prevent="show=!show">{{ category.name }}</a>
            </div>
        </div>

        <div v-else v-on:click="categoryChecked(category)">
            {{ category.name }}
            <span v-if="selected === category.id">X</span>
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
    methods: {
        categoryChecked(category) {
            this.$emit('categoryChecked', category);
        }
    },
    data () {
        return {
            show: false
        }
    },
    computed: {
        selectedCategory() {
            return this.selected;
        }
    }
}
</script>

<style scoped>

</style>
