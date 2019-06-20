/*require('./bootstrap');

window.Vue = require('vue');

Vue.component(
    'app',
    require('./views/App.vue').default
);

const app = new Vue({
    el: '#app'
});
*/

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Edit from './views/Edit'
import Create from './views/Create'

const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/home',
                name: 'home',
                component: Home
            },
            {
                path: '/edit/:id',
                name: 'edit',
                component: Edit
            },
            {
                path: 'create',
                name: 'create',
                component: Create
            }
        ]
})

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

