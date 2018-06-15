import routeImporter from '../modules/importers/routeImporter';

const routes = routeImporter(require.context('./statuses', false, /.*\.js$/));
const RouterView = () => import('../core/Router.vue');

export default {
    path: '/statuses/',
    component: RouterView,
    meta: {
        breadcrumb: 'statuses',
        route: 'statuses.index',
    },
    children: routes,
};

