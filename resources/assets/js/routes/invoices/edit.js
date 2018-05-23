const InvoiceEdit = () => import('../../pages/invoices/Edit.vue');

export default {
    name: 'invoices.edit',
    path: ':id/edit',
    component: InvoiceEdit,
    meta: {
        breadcrumb: 'edit',
        title: 'Edit Invoice',
    },
};
