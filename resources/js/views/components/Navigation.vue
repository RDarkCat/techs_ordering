<template>
    <nav>
        <ul>
            <template v-if="authenticated">
                <li>
                    <router-link
                        :to="{
                        name: 'account'
                    }"
                    >
                        {{ user.name }}
                    </router-link>
                    -
                    <a href="#" @click.prevents="logOut">Logout</a>
                </li><!--Account-->
            </template><!--Link to:account-->

            <template v-else>
                <li>
                    <router-link
                        :to="{
                        name: 'LoginPage'
                    }"
                    >
                        Login
                    </router-link>
                </li><!--Login-->
                <li>
                    <router-link
                        :to="{
                        name: 'registration'
                    }"
                    >
                        Registration
                    </router-link>
                </li><!--Registration-->
            </template><!--Link to:login/registration-->

            <li>
                <router-link
                    :to="{
                        name: 'promos'
                    }"
                >
                    Promos
                </router-link>
            </li><!--Link to:promos-->
            <li>
                <router-link
                    :to="{
                        name: 'about'
                    }"
                >
                    About
                </router-link>
            </li><!--Link to:about-->
            <li>
                <router-link
                    :to="{
                        name: 'categories'
                    }"
                >
                    Categories
                </router-link>
            </li><!--Link to:categories-->
        </ul>
    </nav>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'navigation',
    computed: {
        ...mapGetters({
            authenticated: 'auth/authenticated',
            user: 'auth/user',
        })
    },
    methods: {
        ...mapActions({
            logOutAction: 'auth/logOut'
        }),

        logOut () {
            this.logOutAction().then(() => {
                this.$router.replace({
                    name: 'home'
                })
            })
        }
    }
}
</script>

<style scoped>

</style>
