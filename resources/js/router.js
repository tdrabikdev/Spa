
import Vue from 'vue';
import VueRouter from 'vue-router';

import PostsComponent from "./components/PostsComponent";
import PostComponent from "./components/PostComponent";
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        {
            path: '/',
            name: 'home',
            component: PostsComponent
        },
        {
            path:'/post/:slug/',
            name:'post.show',
            component:PostComponent,
        }
    ]
});

export default router;
