<template>
    <div v-if="getTags">
        <a href="#" v-on:click.prevent="vision=!vision">Tags:</a>
        <TagsList
            v-if="vision"
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
    data () {
        return {
            tags: [],
            vision: false
        }
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
        tagsGet() {
            this.responseTags().then(() => {
                //console.log(this.getTags);
            }).catch(() => {
                //console.log('failed');
            });
        },
        tagChecked(tag) {
            // const cartItem = this.cart.find((cartItem) => +cartItem.id === +id);
            // this.cart = this.cart.filter((item) => item.id !== id);

            const tagItem = this.tags.find((tagItem) => +tagItem.id === +tag.id);

            if (tagItem) {
                this.tags = this.tags.filter((item) => item.id !== tag.id);
            } else {
                this.tags.push({...tag});
            }

            this.$emit('tags', this.tags);
        }
    },
    mounted() {
        this.tagsGet();
    }
}
</script>

<style scoped>

</style>
