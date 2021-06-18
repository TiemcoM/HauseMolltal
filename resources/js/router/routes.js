import Dashboard from "../layouts/Dashboard";
import Auth from "../layouts/Auth";
import PageNotFound from '../views/pageNotFound';
import Home from '../views/home/index';
import Contact from '../views/contact/index';
import Login from "../views/auth/login";
import Calendar from '../views/calendar/index';
import Settings from '../views/settings/index';

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
                component: Home,
            },
            {
                path: "/contact",
                name: "Contact",
                component: Contact,
            },
            {
                path: "/settings",
                name: "settings",
                component: Settings,
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
                component: Login,
            },
        ]
    },{
        path: '/calendar',
        name: 'calendar',
        component: Calendar,
    },
    {path: "*", component: PageNotFound}
];
