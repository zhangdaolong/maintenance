<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateInvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $invoice = $this->route('invoices');

        return [
            'is_active' => 'boolean',
            'amount' => 'required|max:10000',
            'customer_id' => 'required|exists:customers,id',
        ];
    }
}
