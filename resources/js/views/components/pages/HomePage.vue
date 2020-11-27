<template>
    <section class="search_section bg-light">

        <div class="container pt-5 pb-5 d-flex">
            <div class="mr-5">
                <h2 class="title_text">Как это работает?</h2>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis aspernatur id doloremque repudiandae assumenda ab minus, rerum at cupiditate ea error ipsum, modi quae accusamus, nemo dolor natus blanditiis. Laudantium? Sequi dolorem perspiciatis suscipit dicta aperiam omnis neque autem recusandae deserunt aspernatur repellat rerum iste possimus veritatis ipsam nihil impedit dolorum repudiandae, ducimus dolor amet odit minus sed? Eius, obcaecati? Amet iste placeat quisquam. Minima neque corrupti qui quis! </p>
            </div>


            <img src="css/img/cat.jpg" class="round" alt="Responsive image" width="200">
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
