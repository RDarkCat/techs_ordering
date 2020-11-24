window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Vue from 'vue';
import store from '../store';

const LoginPage = () =>
    import(/* webpack-chunk-name: "LoginPage" */
        '../views/components/pages/Auth/LoginPage');
const RegistrationPage = () =>
    import(/* webpack-chunk-name: "RegistrationPage" */
        '../views/components/pages/Auth/RegistrationPage');
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
        '../views/components/pages/404/404')
const CategoriesPage = () =>
    import(/* webpack-chunk-name: "CategoriesPage" */
        '../views/components/pages/Categories/CategoriesPage')

export default new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [
        {
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
            name: 'LoginPage',
            path: '/auth/login',
            component: LoginPage,
            beforeEnter: (to, from, next) => {
                if (store.getters['auth/authenticated']) {
                    return next({
                        name: 'account'
                    });
                }
                next();
            }
        },
        {
            name: 'account',
            path: '/account',
            component: AccountPage,
            beforeEnter: (to, from, next) => {
                if (!store.getters['auth/authenticated']) {
                    return next({
                        name: 'login'
                    });
                }
                next();
            }
        },
        {
            name: 'registration',
            path: '/auth/registration',
            component: RegistrationPage,
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
