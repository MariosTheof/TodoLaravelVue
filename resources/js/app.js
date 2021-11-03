require('./bootstrap');
window.Vue = require('vue').default;

import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueConfirmDialog from 'vue-confirm-dialog'
import 'animate.css';

Vue.use(VueAxios, axios)
Vue.use(VueConfirmDialog)
Vue.component('vue-confirm-dialog', VueConfirmDialog.default);
Vue.component('todo-list', require('./components/TodoList.vue').default);
Vue.component('tag-dropdown', require('./components/TagDropdown.vue').default);
Vue.component('tag-dropdown-radio', require('./components/TagDropdownRadio.vue').default);

const app = new Vue({
    el: '#app',
});
