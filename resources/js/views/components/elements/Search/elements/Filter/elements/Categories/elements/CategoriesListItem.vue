<template>
    <li>
        <div v-if="category.children">
            <div>
                <a href="#" v-on:click.prevent="show=!show">{{ category.name }}</a>
            </div>
        </div>

        <div v-else v-on:click="clicked(category.id)">
            {{ category.name }}
        </div>

        <div v-if="show">
            <ul v-if="category.children">
                <CategoriesListItem
                    is="CategoriesListItem"
                    v-for="item in category.children"
                    v-bind:category="item"
                    v-bind:key='item.id'
                ></CategoriesListItem>
            </ul>
        </div>

    </li>
</template>

<script>
export default {
    name: "CategoriesListItem",
    props: [
        'category'
    ],
    methods: {
        clicked(id) {
            this.category_id = id;
            console.log(this.category_id);
        }
    },
    data () {
        return {
            category_id: null,
            show: false
        }
    }
}
</script>

<style scoped>

</style>
