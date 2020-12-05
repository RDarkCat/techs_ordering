<template>
    <ul>
        <TagsListItem
            is="TagsListItem"
            v-for="tag in tags"
            v-bind:tag="tag"
            v-bind:key="tag.id"
        ></TagsListItem>
    </ul>
</template>

<script>
import TagsListItem from "../../Search/elements/Filter/elements/Tags/elements/TagsListItem";

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
