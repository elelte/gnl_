require('./bootstrap');

window.Vue = require('vue');

Vue.component('home', require('./com/home.vue').default);
Vue.prototype.BASE_URL = "https://gaenael.com/owl_api/";

const app = new Vue({
    el: '#app'
});
