<template>
    <li>
        <div v-if="tag.children">
            <a href="#" v-on:click.prevent="show=!show">
                {{ tag.name }}
            </a>
        </div>

        <div v-else>
            {{ tag.name }}
            <span v-if="selected">X</span>
        </div>
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
        'tag',
        'selected'
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
