const InvoiceCreate = () => import('../../pages/invoices/Create.vue');

export default {
    name: 'invoices.create',
    path: 'create',
    component: InvoiceCreate,
    meta: {
        breadcrumb: 'create',
        title: 'Create Invoice',
    },
};
