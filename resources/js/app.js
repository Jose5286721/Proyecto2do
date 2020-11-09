require('./bootstrap');
import Vue from 'vue';
import Multiselect from 'vue-multiselect';
Vue.component('multiselect',Multiselect);
Vue.component('carretera-select',require('./components/CarreteraSelect.vue').default);
Vue.component('tramo-select',require('./components/TramoSelect.vue').default);
Vue.component('comunidad-select',require('./components/ComunidadSelect.vue').default);
var app = new Vue({
    el:'#app',
})