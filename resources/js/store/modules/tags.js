import axios from "axios";

export default {
    namespaced: true,
    state: {
        tags: null
    },
    getters: {
        getTags (state) {
            return state.tags
        }
    },
    mutations: {
        SET_TAGS (state, tags) {
            state.tags = tags;
        }
    }
    ,
    actions: {
        async responseTags ({ commit }) {
            let response = await axios.
            get('/promos/tags/');

            commit('SET_TAGS', response.data);
        }
    }
}
