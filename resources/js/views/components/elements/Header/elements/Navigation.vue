<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-dark sticky-top nav_bg non-transparent-nav">
            <div class="container">
                <router-link
                    to="/home"
                >
                    <a class="navbar-brand" href="#">Brand</a>
                </router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link
                                :to="{
                        name: 'promos'
                    }"
                            >
                                <a class="nav-link" href="#" data-toggle="collapse" data-target=".navbar-collapse.show">Promos <span class="sr-only">(current)</span></a>
                            </router-link>
                        </li><!--Link to:promos-->
                        <li class="nav-item">
                            <router-link
                                :to="{
                        name: 'about'
                    }"
                            >
                                <a class="nav-link" href="#" data-toggle="collapse" data-target=".navbar-collapse.show">About</a>
                            </router-link>
                        </li><!--Link to:about-->


                    </ul>
                    <Auth />

                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import Auth from "../../Auth/Auth.vue";

export default {
    name: 'Navigation',
    components: {
        Auth
    }
}
</script>

<style scoped>

</style>
