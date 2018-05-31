import Vue from 'vue'
import App from './App'
import router from './router'
import Vuetify from 'vuetify'

Vue.use(Vuetify);

new Vue({
    el: '#app',
    components:{App},
    router
});
