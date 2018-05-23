const InvoiceIndex = () => import('../../pages/invoices/Index.vue');

export default {
    name: 'invoices.index',
    path: '',
    component: InvoiceIndex,
    meta: {
        breadcrumb: 'index',
        title: 'Invoice Index',
    },
};
