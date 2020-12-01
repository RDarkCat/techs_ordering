<template>
    <div>
        <CategoriesDropdown />
        <Tags />
        <SortBy />
        <hr>
    </div>
</template>

<script>
import CategoriesDropdown from "./elements/CategoriesDropdown.vue";
import SortBy from "./elements/SortBy.vue";
import Tags from "./elements/Tags/Tags.vue";

export default {
    name: "FilterBlock",
    components: {
        CategoriesDropdown,
        SortBy,
        Tags
    },
    data () {
        return {
            selectedCategory: null,
            filterProps: {
                categoryId: null,
                tags: [],
                sort: []
            }
        }
    },
    methods: {
        getSelectedCategoryFromLocalStorage() {
            return localStorage.getItem('selectedCategory');
        },
        setSelectedCategoryToLocalStorage(selectedCategory) {
            localStorage.setItem('selectedCategory', JSON.stringify(selectedCategory));
        },
        categoryChecked(category) {
            this.selectedCategory = category;
            this.setSelectedCategoryToLocalStorage(category);
            this.filterProps.categoryId = category.id;
            this.handleFilterProps();
        },
        sortBy (props) {
            this.filterProps.sort = props;
            this.handleFilterProps();
        },
        tags (tags) {
            this.filterProps.tags = tags;
            this.handleFilterProps();
        },
        handleFilterProps () {
            this.$emit('handleFilterProps', this.filterProps);
        }
    },
    computed: {

    },
    created() {
        //this.selectedCategory = this.getSelectedCategoryFromLocalStorage();
    }
}
</script>

<style scoped>

</style>
