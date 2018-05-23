<?php

namespace App\Forms\Builders;

use App\Invoice;
use LaravelEnso\FormBuilder\app\Classes\Form;

class InvoiceForm
{
    private const TemplatePath = __DIR__.'/../Templates/invoice.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Invoice $invoice)
    {
        return $this->form->edit($invoice);
    }
}
