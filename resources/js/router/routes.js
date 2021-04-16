import home from '../views/home/index';
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
    }
];
