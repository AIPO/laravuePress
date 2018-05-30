import Vue from 'vue'
import VueRouter from 'vue-router'

import PostIndex from './views/Index.vue'

Vue.use(VueRouter);
const router = new VueRouter({
    routes: [{
            path: '/',
            redirect: '/posts'
        },
        {
          path: 'posts',
          component: PostIndex
        }


    ]
})
export default router
