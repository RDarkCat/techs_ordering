<template>
    <div>
        <template v-if="authenticated">

            <li class="form-inline my-2 my-lg-0">
                <router-link
                    :to="{
                        name: 'account'
                    }"
                >
                    <a class="nav-link" href="#">Личный кабинет {{ user.name }}</a>
                </router-link>
            </li>

                <a href="#" class="btn btn-primary login_btn" @click.prevents="logOut">
                    Logout
                </a>


        </template><!--Link to:account-->

        <LoginRegistrationForm v-else/>

    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';

import LoginRegistrationForm from "./elemnts/LoginRegistrationForm";

export default {
    name: "Auth",
    components: {
        LoginRegistrationForm
    },
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

        logOut() {
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
