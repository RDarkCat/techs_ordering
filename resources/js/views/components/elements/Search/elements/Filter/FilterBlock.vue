<template>
    <div>
        <Categories
            @categoryChecked="categoryChecked"
            v-bind:selected="selected"
        />
        <Tags @tags="tags" />
        <SortBy @sortBy="sortBy" />
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
                categoryId: null,
                tags: [],
                sort: []
            }
        }
    },
    methods: {
        categoryChecked(category) {
            this.selected = category;
            this.filterProps.categoryId = category.id;
            this.$emit('filterProps', this.filterProps);
        },
        sortBy (props) {
            this.filterProps.sort = props;
            this.$emit('filterProps', this.filterProps);
        },
        tags (tags) {
            this.filterProps.tags = tags;
            this.$emit('filterProps', this.filterProps);
        }
    },
    computed: {

    }
}
</script>

<style scoped>

</style>
