<template>
    <div>
        <section class="search_section bg-light">
            <div class="container pt-5 pb-5 d-flex">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="title_text">Как это работает?</h2>
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis aspernatur id doloremque repudiandae assumenda ab minus, rerum at cupiditate ea error ipsum, modi quae accusamus, nemo dolor natus blanditiis. Laudantium? Sequi dolorem perspiciatis suscipit dicta aperiam omnis neque autem recusandae deserunt aspernatur repellat rerum iste possimus veritatis ipsam nihil impedit dolorum repudiandae, ducimus dolor amet odit minus sed? Eius, obcaecati? Amet iste placeat quisquam. Minima neque corrupti qui quis! </p>
                    </div>
                    <img src="css/img/cat.jpg" class="round col-sm-auto ml-auto" alt="Responsive image" width="200">
                </div>
            </div>
        </section>

        <section class="bg-lightx">
            <div class="container pb-5 pt-5 mb-5">
                <div class="row">
                    <img src="css/img/cat.jpg" class="round col-sm-auto" alt="Responsive image" width="200" height="200">
                    <div class="col-sm-6 ml-auto">
                        <h2 class="title_text">Преимущества сервиса:</h2>
                        <ul class="list-bullet text-justify">
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>

export default {
    name: 'home',
    components: {

    },
    data() {
        return {
            tagsVision: false,
            categoriesVision: false
        }
    }
}
</script>
