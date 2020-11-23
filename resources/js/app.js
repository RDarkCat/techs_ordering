require('./bootstrap');
window.Vue = require('vue');

import Axios from "axios";
Vue.use(VueAxios, Axios);

import Buefy from 'buefy';
import 'buefy/dist/buefy.css';
Vue.use(Buefy);

import VueAxios from 'vue-axios';
import store from './store';
import router from './routes/routes';
import App from './App.vue';

import VueMaterial from 'vue-material';
import 'vue-material/dist/vue-material.min.css';
import 'vue-material/dist/theme/default.css';
Vue.use(VueMaterial);

// import { Form, HasError, AlertError } from 'vform'
// window.Form = Form;

require('./store/subscriber');

Axios.defaults.baseURL = '/api';




store.dispatch('auth/attempt', localStorage.getItem('token')).then(() => {
    new Vue({
        router,
        store,
        render: h => h(App),
    }).$mount('#app');
})
