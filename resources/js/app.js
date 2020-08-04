require('./bootstrap');

window.Vue = require('vue');

Vue.component('home', require('./com/home.vue').default);
Vue.prototype.BASE_URL = "http://gaenael.com/owl_api/";

const app = new Vue({
    el: '#app'
});
