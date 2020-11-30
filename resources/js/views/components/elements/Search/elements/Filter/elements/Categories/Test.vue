<template>
    <div>
        <b-form-select v-model="selected" class="mb-3">
            <b-form-select-option :value="null" >
                Please select an category
            </b-form-select-option>

            <b-form-select-option
                v-for="category in getCategories"
                :value="category.id"
                :key="category.id"

            >
                {{ category.name }}
            </b-form-select-option>
        </b-form-select>



        <div class="mt-2">Selected: <strong>{{ selected }}</strong></div>
    </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
    name: "Test",
    data() {
        return {
            selected: null,
            categories: null
        }
    },
    computed: {
        ...mapGetters({
            getCategories: 'categories/getCategories'
        })
    },
    methods: {
        buildNodes(arr) {
            arr.forEach((node) => {
                if (node.children) {
                    this.buildNodes(node);
                } else {
                    console.log(node.name);
                }
            });
        },
        getNodeById(currentNode, id) {
            let node;
            if (currentNode.id === id) {
                return currentNode;
            }
            currentNode.children.
                some(child => node = this.getNodeById(child, id));
        }
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
