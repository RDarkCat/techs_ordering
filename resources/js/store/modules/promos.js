import axios from "axios";

export default {
    namespaced: true,
    state: {
        filterProps: {
            queryString: null,
            categoryId: null,
            tags: null,
            sort: null
        },
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
        SET_QUERY_STING (state, queryString) {
            state.filterProps.queryString = queryString;
        },
        SET_CATEGORY_ID (state, categoryId) {
            state.filterProps.categoryId = categoryId;
        },
        SET_TAGS (state, tags) {
            state.filterProps.tags = tags;
        },
        SET_SORT (state, sort) {
            state.filterProps.sort = sort;
        },
        SET_PROMO (state, promo) {
            state.promo = promo;
        },
        SET_PROMOS (state, promos) {
            state.promos = promos;
        }
    },
    actions: {
        setQueryString ({ commit }, queryString) {
            commit('SET_QUERY_STING', queryString);
        },
        setCategoryId ({ commit }, categoryId) {
            commit('SET_CATEGORY_ID', categoryId);
        },
        setTags ({ commit }, tags) {
            commit('SET_TAGS', tags);
        },
        setSort ({ commit }, sort) {
            commit('SET_SORT', sort);
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
