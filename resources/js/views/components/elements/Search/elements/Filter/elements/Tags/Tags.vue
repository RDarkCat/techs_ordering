<template>
    <div v-if="getTags">
        <a href="#" v-on:click.prevent="vision=!vision">Tags:</a>
        <TagsList
            v-if="vision"
            :tags="getTags" />
    </div>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import TagsList from "./elements/TagsList.vue";

export default {
    name: "Tags",
    components: {
        TagsList
    },
    data () {
        return {
            tag_id: null,
            vision: false
        }
    },
    computed: {
        ...mapGetters({
            getTags: 'tags/getTags'
        })
    },
    methods: {
        ...mapActions({
            responseTags: 'tags/responseTags'
        }),
        tags() {
            this.responseTags().then(() => {
                //console.log(this.getTags);
            }).catch(() => {
                //console.log('failed');
            });
        }
    },
    mounted() {
        this.tags();
        //console.log(this.getCategories);
    }
}
</script>

<style scoped>

</style>
