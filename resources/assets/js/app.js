require('./bootstrap');
import Vue from 'vue'
import App from './App.vue'

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    render: h =>h(App) 
});
