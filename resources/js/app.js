import Vue from 'vue';
import Hello from './component/hello.vue';

require('./bootstrap');

Vue.component('tasks_test', Hello);
const app = new Vue({
    el: '#app',
});
