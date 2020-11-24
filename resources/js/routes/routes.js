window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Vue from 'vue';
import store from '../store';

const AccountPage = () =>
    import(/* webpack-chunk-name: "AccountPage" */
        '../views/components/pages/User/AccountPage');

const HomePage = () =>
    import(/* webpack-chunk-name: "HomePage" */
        '../views/components/pages/HomePage');
const PromosListPage = () =>
    import(/* webpack-chunk-name: "PromosListPage" */
        '../views/components/pages/Promos/PromosListPage');
const PromoByIdPage = () =>
    import(/* webpack-chunk-name: "PromoByIdPage" */
        '../views/components/pages/Promos/PromoByIdPage');
const AboutPage = () =>
    import(/* webpack-chunk-name: "AboutPage" */
        '../views/components/pages/About/AboutPage');
const PageNotFound = () =>
    import(/* webpack-chunk-name: "PageNotFound" */
        '../views/components/pages/PageNotFound/PageNotFound')
const CategoriesPage = () =>
    import(/* webpack-chunk-name: "CategoriesPage" */
        '../views/components/pages/Categories/CategoriesPage')

export default new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
            name: 'PageNotFound',
            path: '*',
            component: PageNotFound
        },
        {
            path: '/',
            component: HomePage,
        },
        {
            name: 'home',
            path: '/home',
            component: HomePage,
        },
        {
            name: 'account',
            path: '/account',
            component: AccountPage,
            beforeEnter: (to, from, next) => {
                if (!store.getters['auth/authenticated']) {
                    next({ name: 'PageNotFound' })
                } else {
                    next()
                }
            }
        },
        {
            name: 'promos',
            path: '/promos',
            component: PromosListPage,
        },
        {
            name: 'promo',
            path: '/promo/show/:id',
            component: PromoByIdPage,
        },
        {
            name: 'about',
            path: '/about',
            component: AboutPage,
        },
        {
            name: 'categories',
            path: '/categories',
            component: CategoriesPage,
        }

    ],
});
