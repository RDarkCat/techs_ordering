import axios from "axios";

export default {
    namespaced: true,
    state: {
        filterProps: {},
        promo: null,
        promos: [
            // current_page: int
            // data: array()
            // first_page_url: str
            // from: int
            // next_page_url: str
            // path: str
            // per_page: int
            // prev_page_url: str
            // to: int
        ]
    },
    getters: {
        getFilterProps (state) {
            return state.filterProps;
        },
        getPromo (state) {
            return state.promo
        },

        getPromos (state) {
            return state.promos
        }
    },
    mutations: {
        SET_FILER_PROPS (state, filterProps) {
            state.filterProps = filterProps;
        },
        SET_PROMO (state, promo) {
            state.promo = promo;
        },
        SET_PROMOS (state, promos) {
            state.promos = promos;
        }
    }
    ,
    actions: {
        setFilterProps ({ commit }, filterProps) {
            commit('SET_FILER_PROPS', filterProps);
        },

        async responsePromo ({ commit }, id) {
            let response = await axios.
            get('/promos/show/' + id);

            commit('SET_PROMO', response.data);
        },

        async responsePromos ({ commit, state }) {
            let response = await axios.
                post('/promos', state.filterProps);

            commit('SET_PROMOS', response.data);
        }
    }
}
