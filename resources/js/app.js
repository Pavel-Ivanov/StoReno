import Vue from 'vue';
import router from './router';
import Admin from './components/admin/Admin';

require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        Admin
    },

    router,
});
