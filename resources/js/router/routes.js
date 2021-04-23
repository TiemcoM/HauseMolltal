import home from '../views/home/index';
import PageNotFound from '../views/pageNotFound';
import Dashboard from "../layouts/Dashboard";

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
    { path: "*", component: PageNotFound }
];
