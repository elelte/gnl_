require('./bootstrap');

window.Vue = require('vue');

Vue.component('home', require('./com/home.vue').default);
Vue.prototype.BASE_URL = "https://gaenael.com/gnl/";

const app = new Vue({
    el: '#app'
});
