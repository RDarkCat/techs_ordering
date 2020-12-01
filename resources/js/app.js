require('./bootstrap');
window.Vue = require('vue');

import Axios from "axios";
Vue.use(VueAxios, Axios);

import BootstrapVue from 'bootstrap-vue';

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'

Vue.use(VueMaterial)


Vue.use(BootstrapVue);

import VueAxios from 'vue-axios';
import store from './store';
import router from './routes/routes';
import App from './App.vue';

require('./store/subscriber');

Axios.defaults.baseURL = '/api';

store.dispatch('auth/attempt', localStorage.getItem('token')).then(() => {
    new Vue({
        router,
        store,
        render: h => h(App),
    }).$mount('#app');
});
