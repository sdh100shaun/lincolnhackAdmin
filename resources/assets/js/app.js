
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


Vue.component('tshirt', require('./components/tshirt.vue'));
Vue.component('countdown',require('./components/countdown.vue'));
Vue.component('messages',require('./components/messages.vue'));
Vue.component('announcer',require('./components/announcer.vue'));
Vue.component('register',require('./components/register.vue'));
Vue.component('teams',require('./components/teams.vue'));
const app = new Vue({
    el: '#app',
    data:{
        active:null
    }
});


