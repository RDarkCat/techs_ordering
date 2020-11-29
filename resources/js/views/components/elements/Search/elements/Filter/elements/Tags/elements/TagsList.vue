<template>
    <div>
        <TagsListItem
            is="TagsListItem"
            v-for="tag in tags"
            v-bind:tag="tag"
            v-bind:key="tag.id"
            @tagChecked="tagChecked"
        ></TagsListItem>
    </div>
</template>

<script>
import TagsListItem from "./TagsListItem.vue";

export default {
    name: "TagsList",
    components: {
      TagsListItem
    },
    props: [
        'tag',
        'tags'
    ],
    methods: {
        tagChecked(tag) {
            this.$emit('tagChecked', tag);
        }
    }
}
</script>

<style scoped>

</style>
