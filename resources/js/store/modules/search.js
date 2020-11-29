import axios from "axios";

export default {
    namespaced: true,
    state: {
        props: null,
        response: null
    },
    getters: {
        getResponse (state) {
            return state.response;
        }
    },
    mutations: {
        SET_RESPONSE (state, response) {
            state.response = response;
        }
    }
    ,
    actions: {
        async responseSearch ({ commit }, props) {
            let response = await axios.
            post('/search/', {'props': props});

            commit('SET_RESPONSE', response.data);
        }
    }
}
