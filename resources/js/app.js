
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./jquery-3.3.1');
require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// 以下3行を追加
Vue.component('paginate', require('vuejs-paginate'));
Vue.component('attendances', require('./components/Attendances.vue'));
Vue.component('attendance-form', require('./components/AttendanceForm.vue'));

Vue.component('todo2s', require('./components/Todo2s.vue'));
Vue.component('todo2-form', require('./components/Todo2Form.vue'));

const app = new Vue({
    el: '#app'
});

window.Holder = require('./holder');
window.$ = require('./jquery-3.3.1');
