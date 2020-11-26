<template>
    <div>
        <p>Welcome home</p>
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
