
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'a7db4bd6f484f5635646'
});


Vue.component('tshirt', require('./components/tshirt.vue'));
Vue.component('countdown',require('./components/countdown.vue'));
Vue.component('messages',require('./components/messages.vue'));

const app = new Vue({
    el: '#app',
    data:{
        active:null
    }
});

Echo.private(`countdown-message`)
    .listen('CountdownMessage', (e) => {
        console.log(e.update);
    });

