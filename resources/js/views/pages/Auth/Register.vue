<template>
    <form @submit.prevent="submit">
        <div>
            <label for="name">
                Name
            </label>

            <input type="text" name="name" id="name" v-model="form.name">
        </div>
        <div>
            <label for="email">
                Email
            </label>

            <input type="text" name="email" id="email" v-model="form.email">
        </div>
        <div>
            <label for="password">
                Password
            </label>

            <input type="password" name="password" id="password" v-model="form.password">
        </div>
        <div>
            <label for="password_confirmation">
                Password confirmation
            </label>

            <input type="password" name="password_confirmation" id="password_confirmation"
                   v-model="form.password_confirmation">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</template>

<script>
import { mapActions } from 'vuex';
export default {
    name: 'registration',
    data () {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            }
        }
    },
    methods: {
        ...mapActions({
            register: 'auth/register'
        }),
        submit () {
            this.register(this.form).then(() => {
                this.$router.replace({
                    name: 'account'
                })
            }).catch(() => {
                //console.log('failed');
            });
        }
    }
}
</script>

<style scoped>

</style>
