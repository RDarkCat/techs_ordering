import axios from "axios";

export default {
    namespaced: true,
    state: {
        promo: null,
        promos: []
    },
    getters: {
        getPromo (state) {
            return state.promo
        },

        getPromos (state) {
            return state.promos
        }
    },
    mutations: {
        SET_PROMO (state, promo) {
            state.promo = promo;
        },
        SET_PROMOS (state, promos) {
            state.promos = promos;
        }
    }
    ,
    actions: {
        async responsePromo ({ commit }, id) {
            let response = await axios.get('/promos/show/' + id);

            commit('SET_PROMO', response.data);
        },

        async responsePromos ({ commit }, page = null) {
            let response = await axios.get('/promos', page);

            commit('SET_PROMOS', response.data);
        }
    }
}
