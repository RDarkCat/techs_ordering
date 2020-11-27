<template>
    <div>
        <b-button v-b-modal.modal-prevent-closing>
            Login / Registration
        </b-button>

        <b-modal
            id="modal-prevent-closing"
            ref="modal"
            title="Welcome"
            @show="resetModal"
            @hidden="resetModal"
            @ok="handleOk"
        >

            <p>
                <a href="#" v-on:click.prevent="type='login'; registrationFormVisible=false; loginFormVisible=true">
                    Login
                </a>
                /
                <a href="#" v-on:click.prevent="type='registration'; loginFormVisible=false; registrationFormVisible=true">
                    Registration
                </a>
            </p>

            <form ref="form"
                  @submit.stop.prevent="handleLoginSubmit"
                  v-if="loginFormVisible"
            >
                <b-form-group
                    :state="emailState"
                    label="Email"
                    label-for="email-input"
                    invalid-feedback="Email is required"
                >
                    <b-form-input
                        id="name-input"
                        type="text"
                        name="email"
                        v-model="form.email"
                        :state="emailState"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    :state="passwordState"
                    label="Password"
                    label-for="password-input"
                    invalid-feedback="Password is required"
                >
                    <b-form-input
                        id="password-input"
                        type="password"
                        name="password"
                        v-model="form.password"
                        :state="passwordState"
                        required
                    ></b-form-input>
                </b-form-group>
            </form>

            <form ref="form"
                  @submit.stop.prevent="handleRegistrationSubmit"
                  v-if="registrationFormVisible"
            >
                <b-form-group
                    :state="nameState"
                    label="Name"
                    label-for="name-input"
                    invalid-feedback="Name is required"
                >
                    <b-form-input
                        id="name-input"
                        type="text"
                        name="name"
                        v-model="form.name"
                        :state="nameState"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    :state="emailState"
                    label="Email"
                    label-for="email-input"
                    invalid-feedback="Email is required"
                >
                    <b-form-input
                        id="name-input"
                        type="text"
                        name="email"
                        v-model="form.email"
                        :state="emailState"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    :state="passwordState"
                    label="Password"
                    label-for="password-input"
                    invalid-feedback="Password is required"
                >
                    <b-form-input
                        id="password-input"
                        type="password"
                        name="password"
                        v-model="form.password"
                        :state="passwordState"
                        required
                    ></b-form-input>
                </b-form-group>

                <b-form-group
                    :state="passwordState"
                    label="PasswordConfirmation"
                    label-for="passwordConfirmation-input"
                    invalid-feedback="Password confirmation is required"
                >
                    <b-form-input
                        id="passwordConfirmation-input"
                        type="password"
                        name="password_confirmation"
                        v-model="form.password_confirmation"
                        :state="passwordConfirmationState"
                        required
                    ></b-form-input>
                </b-form-group>
            </form>
        </b-modal>
    </div>
</template>

<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "LoginRegistrationForm",
    data() {
        return {
            type: 'login',
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
            nameState: null,
            emailState: null,
            passwordState: null,
            passwordConfirmationState: null,

            loginFormVisible: true,
            registrationFormVisible: false
        }
    },
    methods: {
        ...mapActions({
            logIn: 'auth/logIn',
            register: 'auth/register'
        }),
        checkFormValidity(type) {
            // это базовая валидация без запроса в БД.
            // нужно доапгрейдить

            if (type === 'login') {
                this.emailState = this.$refs.form.email.checkValidity();
                this.passwordState = this.$refs.form.password.checkValidity();
            }
            if (type === 'registration') {
                this.nameState = this.$refs.form.name.checkValidity();
                this.emailState = this.$refs.form.email.checkValidity();
                this.passwordState = this.$refs.form.password.checkValidity();
            }
            return this.$refs.form.checkValidity();
        },
        resetModal() {
            this.form.name = '';
            this.nameState = null;
            this.form.email = '';
            this.emailState = null;
            this.form.password = '';
            this.passwordState = null;
        },
        handleOk(bvModalEvt) {
            // Prevent modal from closing
            bvModalEvt.preventDefault();

            // Trigger submit handler
            if (this.type === 'login') {
                this.handleLoginSubmit();
            }
            if (this.type === 'registration') {
                this.handleRegistrationSubmit();
            }

        },
        handleLoginSubmit() {
            // Exit when the form isn't valid
            //this.checkFormValidity('login');
            if (!this.checkFormValidity('login')) {
                return
            }

            this.logIn(this.form).then(() => {

                // this.$router.replace({
                //     name: 'account'
                // })
            }).catch(() => {
                //console.log('failed');
            });

            // Hide the modal manually
            this.$nextTick(() => {
                this.$bvModal.hide('modal-prevent-closing')
            })
        },
        handleRegistrationSubmit() {
            // Exit when the form isn't valid
            //this.checkFormValidity('login');
            if (!this.checkFormValidity('registration')) {
                return
            }

            this.register(this.form).then(() => {
                //return
                // this.$router.replace({
                //     name: 'account'
                // })
            }).catch(() => {
                //console.log('failed');
            });

            // Hide the modal manually
            this.$nextTick(() => {
                this.$bvModal.hide('modal-prevent-closing')
            })
        }
    }
}
</script>

<style scoped>

</style>
