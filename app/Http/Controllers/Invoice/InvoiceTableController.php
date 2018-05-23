<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Tables\Builders\InvoiceTable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class InvoiceTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = InvoiceTable::class;
}
