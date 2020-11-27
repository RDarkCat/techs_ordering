<template>
    <div v-if="getCategories">
        <CategoriesList :categories="getCategories" />
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import CategoriesList from "./elements/CategoriesList.vue";
export default {
    name: "Categories",
    components: {
        CategoriesList
    },
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
                //console.log(this.getCategories);
            }).catch(() => {
                //console.log('failed');
            });
        }
    },
    mounted() {
        this.categories();
        //console.log(this.getCategories);
    }
}
</script>

<style scoped>

</style>
