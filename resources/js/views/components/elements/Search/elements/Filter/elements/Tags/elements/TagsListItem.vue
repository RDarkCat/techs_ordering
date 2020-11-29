<template>
    <span>
        <div v-if="tag.children">
<!--            <a href="#" v-on:click.prevent="show=!show">-->
                <b>
                    {{ tag.name }}:
                </b>
            <!--            </a>-->
        </div>

        <span
            class="tag_item"
            v-bind:class="{ active: isActive}"
            v-on:click="isActive=!isActive"
            v-else>
            {{ tag.name }}
            <span v-if="selected === tag">X</span>
        </span>

        <!--        <div v-if="show">-->
            <div v-if="tag.children">
                <TagsListItem
                    is="TagsListItem"
                    v-for="item in tag.children"
                    v-bind:tag="item"
                    v-bind:key="item.id"
                ></TagsListItem>
            </div>
        <!--        </div>-->

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
            isActive: false,
            show: false
        }
    },
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
