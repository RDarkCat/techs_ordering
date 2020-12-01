<template>
    <div v-if="getTags">
        <TagsList
            :tags="getTags"
            @tagChecked="tagChecked"
        />
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
    data() {
        return {
            tags: [],
            vision: false,
        }
    },
    computed: {
        ...mapGetters({
            getTags: 'tags/getTags'
        })
    },
    methods: {
        ...mapActions({
            responseTags: 'tags/responseTags',
            setTagsStore: 'promos/setTags'
        }),
        tagChecked(tag) {
            const tagItem = this.tags.find((tagItem) => +tagItem.id === +tag.id);

            if (tagItem) {
                this.tags = this.tags.filter((item) => item.id !== tag.id);
                this.setTagsStore(this.tags);
            } else {
                this.tags.push({...tag});
                this.setTagsStore(this.tags);
            }
        }
    },
    mounted() {
        this.responseTags();
    }
}
</script>

<style scoped>

</style>
