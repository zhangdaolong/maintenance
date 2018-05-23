<?php

namespace App\Tables\Builders;

use App\Invoice;
use LaravelEnso\VueDatatable\app\Classes\Table;

class InvoiceTable extends Table
{
    protected $templatePath = __DIR__.'/../Templates/invoice.json';

    public function query()
    {
        return Invoice::join('customers', 'invoices.customer_id', '=', 'customers.id')
            ->join('statuses', 'invoices.status_id', '=', 'statuses.id')
            ->select(\DB::raw('invoices.id as "dtRowId", invoices.is_active as "is_active", invoices.amount as "amount", invoices.created_at as "created_at", customers.name as "customer", statuses.name as "status"'));
    }
}
