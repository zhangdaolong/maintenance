import routeImporter from '../modules/importers/routeImporter';

const routes = routeImporter(require.context('./invoices', false, /.*\.js$/));
const RouterView = () => import('../core/Router.vue');

export default {
    path: '/invoices/',
    component: RouterView,
    meta: {
        breadcrumb: 'invoices',
        route: 'invoices.index',
    },
    children: routes,
};

