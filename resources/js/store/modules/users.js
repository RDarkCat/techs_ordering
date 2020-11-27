import axios from "axios";

export default {
    namespaced: true,
    state: {
        user: null,
        users: [
        ]
    },
    getters: {
        getUser (state) {
            return state.user
        },

        getUsers (state) {
            return state.users
        }
    },
    mutations: {
        SET_USER (state, user) {
            state.user = user;
        },
        SET_USERS (state, users) {
            state.users = users;
        }
    }
    ,
    actions: {
        async responseUser ({ commit }, id) {
            commit('SET_PROMO', id);
        },

        async responsePromos ({ commit }) {
            let response = await axios.
                get('/users');

            commit('SET_USERS', response.data);
        }
    }
}