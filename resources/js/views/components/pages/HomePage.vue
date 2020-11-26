<template>
    <div>
        <p>Welcome home</p>
<!--        <a href="#" v-on:click.prevent="tagsVision=!tagsVision">-->
<!--            Tags tree-->
<!--        </a>-->
<!--        <hr>-->
<!--        <a href="#" v-on:click.prevent="categoriesVision=!categoriesVision">-->
<!--            Categories tree-->
<!--        </a>-->
<!--        <hr>-->
<!--        <Tags v-if="tagsVision" />-->
<!--        <hr>-->
<!--        <Categories v-if="categoriesVision" />-->
    </div>
</template>

<script>
import Tags from "../elements/Tags/Tags.vue";
import Categories from "../elements/Categories/Categories.vue";

export default {
    name: 'home',
    components: {
        Tags,
        Categories
    },
    data() {
        return {
            tagsVision: false,
            categoriesVision: false
        }
    }
}
</script>
