<template>
    <div>
        <hr>
        <Categories
            @categoryChecked="categoryChecked"
            v-bind:selected="selected"
        />
        <hr>
        <Tags @tags="tagsBy"/>
        <hr>
        <SortBy @sortBy="sortBy"/>
        <hr>
    </div>
</template>

<script>
import Categories from "./elements/Categories/Categories.vue";
import SortBy from "./elements/SortBy.vue";
import Tags from "./elements/Tags/Tags.vue";


export default {
    name: "FilterBlock",
    components: {
        Categories,
        SortBy,
        Tags
    },
    data () {
        return {
            selected: {},
            filterProps: {
                category: null,
                tags: {},
                sort: {}
            }

        }
    },
    methods: {
        categoryChecked(category) {
            this.selected = category;
            this.filterProps.category = category;
        },
        sortBy (props) {
            this.filterProps.sort = props;
        },
        tagsBy (tags) {
            this.filterProps.tags = tags;
        }
    },
    computed: {

    }
}
</script>

<style scoped>

</style>
