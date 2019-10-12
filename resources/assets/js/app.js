
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require("./bootstrap.js");
import { ValidationProvider, ValidationObserver } from 'vee-validate/dist/vee-validate.full'


Vue.component('ValidationProvider', ValidationProvider);
Vue.component('ValidationObserver', ValidationObserver);

Vue.component('tshirt', require('./components/tshirt.vue').default);
Vue.component('countdown',require('./components/countdown.vue').default);
Vue.component('messages',require('./components/messages.vue').default);
Vue.component('announcer',require('./components/announcer.vue').default);
Vue.component('register',require('./components/register.vue').default);
Vue.component('teams',require('./components/teams.vue').default);
Vue.component('chat',require('./components/teams.vue').default);
Vue.component('attendance',require('./components/attendance.vue').default);

const app = new Vue({
    el: '#app',
    data:{
        active:null
    }
});


