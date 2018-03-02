
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// load all dependencies
import axios from 'axios'

window.Vue = require('vue');
window.axios = axios;

// load all components
Vue.component('task-list', require('./components/Task-list.vue'));
// define new Vue instances
const app = new Vue({
    el: '#app'
});