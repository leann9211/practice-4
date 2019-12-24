import Vue from 'vue';
import VueRouter from 'vue-router';


import Dashboard from './components/Dashboard';
import Profile from './components/Profile';

Vue.use(VueRouter);

export default new VueRouter({
    routes: [{
            path: '/dashboard',
            component: Dashboard
        },
        {
            path: '/profile',
            component: Profile
        },
    ],
    mode: 'history'
});