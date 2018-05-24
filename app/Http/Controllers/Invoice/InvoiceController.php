<?php

namespace App\Http\Controllers\Invoice;

use App\Invoice;
use App\Forms\Builders\InvoiceForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateInvoiceRequest;

class InvoiceController extends Controller
{
    public function create(InvoiceForm $form)
    {
        return ['form' => $form->create()];
    }

    public function store(ValidateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice = Invoice::create($request->all());

        return [
            'message' => __('The entity was created!'),
            'redirect' => 'invoices.edit',
            'id' => $invoice->id,
        ];
    }

    public function edit(Invoice $invoice, InvoiceForm $form)
    {
        return ['form' => $form->edit($invoice)];
    }

    public function update(ValidateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update($request->all());

        return ['message' => __(config('enso.labels.savedChanges'))];
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return [
            'message' => __(config('enso.labels.successfulOperation')),
            'redirect' => 'invoices.index',
        ];
    }
}
