import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import store from './../store';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: 'admin',
    routes,
});
router.beforeEach((to, from, next) => {
    let test = to.matched.some(record => record.meta.requiresAuth);
    console.log(test)
    if (to.matched.some(record => record.meta.requiresAuth)) {
        store.dispatch("user/checkAuth").then(res => {
            next()
        }).catch(err => {
            next({
                path: '/login',
            })
        });
    } else {
        next()
    }
})
export default router;
