<template>
    <span>
        <div v-if="tag.children">
            <b>{{ tag.name }}:</b>
        </div>

        <span v-else class="tag_item">
            <input type="checkbox" v-on:click="tagChecked(tag)">
            {{ tag.name }}
        </span>

            <div v-if="tag.children">
                <TagsListItem
                    is="TagsListItem"
                    v-for="item in tag.children"
                    v-bind:tag="item"
                    v-bind:key="item.id"
                    @tagChecked="tagChecked"
                ></TagsListItem>
            </div>

    </span>
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
            isActive: false
        }
    },
    methods: {
        tagChecked(tag) {
            this.$emit('tagChecked', tag);
        }
    }
}
</script>

<style lang="sass" scoped>
.tag_item
    display: inline-block
    padding: 1px
    margin: 1px

.active
    background-color: cadetblue


</style>
