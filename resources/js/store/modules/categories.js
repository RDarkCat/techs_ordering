import axios from "axios";

export default {
    namespaced: true,
    state: {
        categories: null,
        categoriesTree: null
    },
    getters: {
        getCategories (state) {
            return state.categories
        }
    },
    mutations: {
        SET_CATEGORIES (state, categories) {
            state.categories = categories;
        }
    }
    ,
    actions: {
        async responseCategories ({ commit }) {
            let response = await axios.
            get('/promos/categories/');

            commit('SET_CATEGORIES', response.data);
        },
        makeCategoriesTree () {

        }
    }
}
