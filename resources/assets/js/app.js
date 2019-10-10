
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { ValidationProvider, ValidationObserver } from 'vee-validate/dist/vee-validate.full'

// Pulling in all validation rules in because I'm being lazy

// Use the provider immediately
Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

require('./bootstrap');


Vue.component('tshirt', require('./components/tshirt.vue'));
Vue.component('countdown',require('./components/countdown.vue'));
Vue.component('messages',require('./components/messages.vue'));
Vue.component('announcer',require('./components/announcer.vue'));
Vue.component('register',require('./components/register.vue'));
Vue.component('teams',require('./components/teams.vue'));
Vue.component('chat',require('./components/teams.vue'));
Vue.component('attendance', require('./components/attendance.vue'));

const app = new Vue({
    el: '#app',
    data:{
        active:null
    }
});


