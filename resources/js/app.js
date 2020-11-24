

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'


Vue.use(Vuetify)

import User from './Helper/User';
import AppStoreage from './Helper/AppStorage'
window.User=User;
window.AppStoreage=AppStoreage;

Vue.component('AppHome', require('./components/AppHome.vue').default);
import router from './Router/router.js'


const app = new Vue({
    vuetify : new Vuetify(),
    el: '#app',
    router
});
