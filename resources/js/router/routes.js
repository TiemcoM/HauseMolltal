import Dashboard from "../layouts/Dashboard";
import Auth from "../layouts/Auth";
import PageNotFound from '../views/pageNotFound';
import home from '../views/home/index';
import login from "../views/auth/login";

export default [
    {
        path: '/',
        name: 'Dashboard',
        component: Dashboard,
        children: [
            {
                path: "/home",
                name: "home",
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
                name: "login",
                component: login,
            },
        ]
    },
    {path: "*", component: PageNotFound}
];
