window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Vue from 'vue';
import store from '../store';

const LoginPage         = () => import('../views/pages/Auth/Login');
const AccountPage       = () => import('../views/pages/Account');
const RegistrationPage  = () => import('../views/pages/Auth/Register');
const HomePage          = () => import('../views/pages/Home');
const PromosPage     = () => import('../views/pages/Promos');
const AboutPage         = () => import('../views/pages/About');
const PageNotFound      = () => import('../views/pages/404')

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
