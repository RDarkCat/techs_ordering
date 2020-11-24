<template>
    <div>
        Categories list
        <ul v-if="getCategories">
            <li v-for="category in getCategories">
                {{ category.name }}
            </li>
        </ul>
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
    name: "CategoriesListPage",
    computed: {
        ...mapGetters({
            getCategories: 'categories/getCategories'
        })
    },
    methods: {
        ...mapActions({
            responseCategories: 'categories/responseCategories'
        }),
        categories() {
            this.responseCategories().then(() => {

            }).catch(() => {
                //console.log('failed');
            });
        }
    },
    mounted() {
        this.categories();
        console.log(this.getCategories);
    }
}
</script>

<style scoped>

</style>
