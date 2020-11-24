<template>
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
                <a href="#" v-on:click.prevent="visionControl('login')">Login</a>
            </li>
            <li>
                <a href="#" v-on:click.prevent="visionControl('registration')">Registration</a>
            </li>
            <div v-if="loginFormVisible">
                <Login />
            </div>
            <div v-if="registrationFormVisible">
                <Registration />
            </div>
        </template><!--Link to:login/registration-->
    </ul>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';

import Login from "./Login";
import Registration from "./Registration";

export default {
    name: "Auth",
    data() {
      return {
          loginFormVisible: false,
          registrationFormVisible: false
      }
    },
    components: {
        Login,
        Registration
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
                // this.$router.replace({
                //     name: 'home'
                // })
            })
        },
        visionControl(form) {
            if (form === 'login') {
                this.loginFormVisible=!this.loginFormVisible;
                this.registrationFormVisible = false;
            }
            if (form === 'registration') {
                this.registrationFormVisible = !this.registrationFormVisible;
                this.loginFormVisible = false;
            }
        }
    }
}
</script>

<style scoped>

</style>
