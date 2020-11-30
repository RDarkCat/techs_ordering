<template>
    <div v-if="getCategories">
        <a href="#" v-on:click.prevent="vision=!vision">
            Categories:
        </a>
        <span v-if="selectedCategory">
            {{ selectedCategory.name }}
        </span>
        <CategoriesList
            v-if="vision"
            v-bind:selectedCategory="selectedCategory"
            :categories="getCategories"
            @categoryChecked="categoryChecked"
        />
<!--        <select v-model="selected">-->
<!--            <option disabled value="">Выберите одну из категорий</option>-->
<!--            <option-->
<!--                v-for="category in getCategories"-->
<!--                v-bind:value="category.id"-->
<!--            >-->
<!--                {{ category.name }}-->
<!--            </option>-->
<!--        </select>-->
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
    props: [
        'selectedCategory'
    ],
    data () {
        return {
            vision: false
        }
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
        },
        categoryChecked(category) {
            this.$emit('selectedCategory', category);
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
