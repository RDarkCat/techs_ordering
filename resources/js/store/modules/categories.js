import axios from "axios";

export default {
    namespaced: true,
    state: {
        categories: null
    },
    getters: {
        getCategoriesList (state) {
            return state.categories
        }
    },
    mutations: {
        SET_CATEGORIES_LIST (state, categories) {
            state.categories = categories;
        }
    }
    ,
    actions: {
        async responseCategoriesList ({ commit }) {
            let response = await axios.
            get('/categories');

            commit('SET_CATEGORIES_LIST', response.data);
        }
    }
}
