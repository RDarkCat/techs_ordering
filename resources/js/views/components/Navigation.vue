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
                </li>
            </template>

            <template v-else>
                <li>
                    <router-link
                        :to="{
                        name: 'login'
                    }"
                    >
                        Login
                    </router-link>
                </li>
                <li>
                    <router-link
                        :to="{
                        name: 'registration'
                    }"
                    >
                        Registration
                    </router-link>
                </li>
            </template>
            <li>
                <router-link
                    :to="{
                        name: 'promos'
                    }"
                >
                    Promos
                </router-link>
            </li>
            <li>
                <router-link
                    :to="{
                        name: 'about'
                    }"
                >
                    About
                </router-link>
            </li>
            <li>
                <router-link
                    :to="{
                        name: 'test'
                    }"
                >
                    Test
                </router-link>
            </li>
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
