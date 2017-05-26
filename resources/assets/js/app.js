
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*
window.Vue = require('vue');*/

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
Vue.component('example', require('./components/Example.vue'));

const sidebar = new Vue({
    el: '#sidebar'
});

const app = new Vue({
    el: '#app'
});*/

import Vue from 'vue';
import Dashboard from './components/Dashboard/Dashboard';

new Vue({
  el: '#dashboard',
  components: { Dashboard }
});
