<template>
    <div>
        <TagsListItem
            is="TagsListItem"
            v-for="tag in tags"
            v-bind:tag="tag"
            v-bind:key="tag.id"
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
        'tags'
    ]
}
</script>

<style scoped>

</style>
