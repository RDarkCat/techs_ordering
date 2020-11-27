<template>
    <div v-if="getTags">
        <TagsList :tags="getTags" />
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
