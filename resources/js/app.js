window.Vue = require('vue');

import Axios from "axios";
import Buefy from 'buefy';
import 'buefy/dist/buefy.css';
import VueAxios from 'vue-axios';
import store from './store';
import router from './routes/routes';
import App from './App'

require('./store/subscriber');

Axios.defaults.baseURL = '/api';

Vue.use(VueAxios, Axios);
Vue.use(Buefy);

store.dispatch('auth/attempt', localStorage.getItem('token')).then(() => {
    new Vue({
        router,
        store,
        render: h => h(App),
    }).$mount('#app');
})
