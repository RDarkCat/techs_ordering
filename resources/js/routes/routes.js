window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Vue from 'vue';
import store from '../store';

const LoginPage = () =>
    import(/* webpack-chunk-name: "LoginPage" */
        '../views/pages/Auth/Login');
const AccountPage = () =>
    import(/* webpack-chunk-name: "AccountPage" */
        '../views/pages/Account');
const RegistrationPage = () =>
    import(/* webpack-chunk-name: "RegistrationPage" */
        '../views/pages/Auth/Register');
const HomePage = () =>
    import(/* webpack-chunk-name: "HomePage" */
        '../views/pages/Home');
const PromosPage = () =>
    import(/* webpack-chunk-name: "PromosPage" */
        '../views/pages/Promos');
const AboutPage = () =>
    import(/* webpack-chunk-name: "AboutPage" */
        '../views/pages/About');
const PageNotFound = () =>
    import(/* webpack-chunk-name: "PageNotFound" */
        '../views/pages/404')

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
            name: 'login',
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
            component: PromosPage,
        },
        {
            name: 'about',
            path: '/about',
            component: AboutPage,
        }
    ],
});
