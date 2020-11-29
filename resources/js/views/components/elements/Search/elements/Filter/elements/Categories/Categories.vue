<template>
    <div v-if="getCategories">
        <a href="#" v-on:click.prevent="vision=!vision">
            Categories:
        </a>
        <span v-if="selected">
            {{ selected.name }}
        </span>
        <CategoriesList
            v-if="vision"
            v-bind:selected="selected.id"
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
        'selected'
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
            this.$emit('categoryChecked', category);
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
