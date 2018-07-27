require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';

import moment from 'moment';

Vue.use(Buefy);
//Vue.use(moment);
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// var app = new Vue({
//     el: "#app",
//     data: {}
// });

require('./intranet');
