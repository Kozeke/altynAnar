/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import VueRouter from 'vue-router';
import VueTheMask from 'vue-the-mask'

Vue.use(VueRouter);
Vue.use(VueTheMask)

Vue.component('foods', require('./components/Foods.vue').default);
Vue.component('categories', require('./components/Categories.vue').default);
Vue.component('admin_side', require('./admin/AdminSidebar.vue').default);

import Checkout from './components/Checkout';
import Foods from './components/Foods';
import Dashboard from "./admin/Dashboard";

/**example-component
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const routes = [
    {
        path: '/', component: Foods
    },
    {
        path: '/checkout', component: Checkout
    },
    {
        path: "/dashboard", component: Dashboard
    }
]
const router = new VueRouter({
    routes // short for `routes: routes`
})
var pathname = window.location.pathname;
if (document.getElementById('app') !== null) {
    const app = new Vue({
        router,
        el: '#app',
        data: {
            foods: "",
            categories: "",
        },
        methods: {
            getFoods() {
                axios.get("/api/get/foods", {
                    params: {
                    }
                }).then(response => {
                    this.categories = response.data;
                    console.log(response.data);

                }).catch(e => {
                    console.log(e);
                });
                return false;
            }
        },
        mounted() {
            this.getFoods();

        }
    });
}

if (document.getElementById('admin') !== null) {
    const app = new Vue({
        router,
        el: '#admin',
        data: {
            foods: "",
            categories: "",
        },
        methods: {
            getFoods() {
                console.log("foods");
                axios.get("/api/get/foods", {
                    params: {
                    }
                }).then(response => {
                    this.categories = response.data;
                    console.log(response.data);

                }).catch(e => {
                    console.log(e);
                });
                return false;
            }
        },
        mounted() {
            this.getFoods();

        }
    });
}