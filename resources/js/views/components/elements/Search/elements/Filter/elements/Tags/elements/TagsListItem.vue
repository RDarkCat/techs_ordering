<template>
    <li>
        {{ tag.name }}
        <ul v-if="tag.children">
            <TagsListItem
                is="TagsListItem"
                v-for="item in tag.children"
                v-bind:tag="item"
                v-bind:key="item.id"
            ></TagsListItem>
        </ul>
    </li>
</template>

<script>
export default {
    name: "TagsListItem",
    props: [
        'tag'
    ],
    data() {
        return {
            show: false
        }
    },
}
</script>

<style scoped>

</style>
