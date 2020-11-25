<template>
    <div>
        <p>Welcome home</p>
        <a href="#" v-on:click.prevent="tagsVision=!tagsVision">
            Tags tree
        </a>
        <hr>
        <a href="#" v-on:click.prevent="categoriesVision=!categoriesVision">
            Categories tree
        </a>
        <hr>
        <Tags v-if="tagsVision" />
        <hr>
        <Categories v-if="categoriesVision" />
    </div>
</template>

<script>
import Tags from "../elements/Tags/Tags";
import Categories from "../elements/Categories/Categories";

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
    },
    methods: {
        // visionControl(data) {
        //     if (data === 'tags') {
        //         this.tagsVision = !this.tagsVision;
        //         this.categoriesVision = false;
        //     }
        //     if (data === 'categories') {
        //         this.categoriesVision = !this.categoriesVision;
        //         this.tagsVision = false;
        //     }
        // }
    }
}
</script>
