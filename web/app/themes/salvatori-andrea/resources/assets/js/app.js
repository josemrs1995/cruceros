// Import IE polyfill for Vue
import "babel-polyfill";

// Require utils js
require('./utils');
// Require Vue
window.axios = require('axios');
window.Vue = require('vue');

require('./globals')

Vue.component('posts-loop', require('./components/posts-loop.vue'));
Vue.component('pages-loop', require('./components/pages-loop.vue'));


Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {
        var app = new Vue({
            el: '#app'
        });
        wow.init();
        var sync = setInterval(() => {
            wow.sync();
        }, 2000);
        setTimeout(() => {
            clearInterval(sync);
        }, 15000);
        
    });