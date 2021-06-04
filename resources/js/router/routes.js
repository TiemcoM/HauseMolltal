import Dashboard from "../layouts/Dashboard";
import Auth from "../layouts/Auth";
import PageNotFound from '../views/pageNotFound';
import home from '../views/home/index';
import login from "../views/auth/login";
import calendar from '../views/calendar/index';

export default [
    {
        path: '/admin',
        name: 'Dashboard',
        component: Dashboard,
        meta: { requiresAuth: true },
        children: [
            {
                path: "/home",
                name: "Home",
                component: home,
            },
        ]
    },
    {
        path: '/',
        name: 'auth',
        component: Auth,
        children: [
            {
                path: "/login",
                name: "Login",
                component: login,
            },
        ]
    },{
        path: '/calendar',
        name: 'calendar',
        component: calendar,
    },
    {path: "*", component: PageNotFound}
];
