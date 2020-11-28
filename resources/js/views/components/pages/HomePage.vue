<template>
    <section class="d-flex justify-content-around bg-main slider">
        <div class="container-fluid title_main">
            <div class="row justify-content-center">
                <h1 class="main_text text-center">Аренда и заказ строительной техники</h1>
            </div>

        </div>
    </section>
</template>

<script>
import Tags from "../elements/Tags-tmp/Tags.vue";
import Categories from "../elements/Categories-tmp/Categories.vue";

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
