import Vue from 'vue'
import VueRouter from 'vue-router'
import AppHome from '../components/AppHome'


Vue.use(VueRouter);
const router = new VueRouter({
    routes: [
        {
            path: '/',
            component: AppHome
        },
    ]
})
export default router
