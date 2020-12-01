<template>
    <span>
        <div v-if="tag.children">
            <b>{{ tag.name }}:</b>
        </div>

        <span v-else
              class="tag_item"
              v-bind:class="{ active: isActive}"
              v-on:click="tagChecked(tag)"
        >
            <span v-on:click="isActive=!isActive">
                {{ tag.name }}
            </span>
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
    background-color: #edf2f7
    border: 1px solid grey
    padding: 5px
    margin: 1px

    &:hover
        background-color: lightblue
        cursor: pointer

.active
    background-color: cadetblue


</style>
