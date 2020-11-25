window.Vue = require('vue');
import Vuex from "vuex";

import auth from "./modules/auth";
import promos from "./modules/promos";
import categories from "./modules/categories";
import tags from "./modules/tags";
import search from "./modules/search";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        errors: []
    },
    getters: {
        errors: state => state.errors
    },
    mutations: {
        setErrors(state, errors) {
            state.errors = errors;
        }
    },
    actions: {
        //
    },
    modules: {
        auth,
        promos,
        categories,
        tags,
        search
    },
});

