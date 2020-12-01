<template>

        <b-form-select
            v-model="selected"
            @change="categoryChecked"
            class="mb-3"
        >
            <b-form-select-option :value="null">
                Please select an category
            </b-form-select-option>

            <b-form-select-option-group
                v-for="category in getCategories"
                v-if="category.children"
                :label="category.name"
                :value="category.id"
                :key="category.id"
            >
                <b-form-select-option
                    v-for="item in category.children"
                    :value="item.id"
                    :key="item.id"

                >
                    {{ item.name }}
                </b-form-select-option>
            </b-form-select-option-group>
        </b-form-select>


</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
    name: "CategoriesDropdown",
    props: [
        'selectedCategory'
    ],
    data () {
        return {
            vision: false,
            selected: null
        }
    },
    computed: {
        ...mapGetters({
            getCategories: 'categories/getCategories'
        })
    },
    methods: {
        ...mapActions({
            responseCategories: 'categories/responseCategories',
            setCategoryIdStore: 'promos/setCategoryId'
        }),
        categories() {
            this.responseCategories().then(() => {
                //console.log(this.getCategories);
            }).catch(() => {
                //console.log('failed');
            });
        },
        categoryChecked() {
            this.setCategoryIdStore(this.selected);
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
