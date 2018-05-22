<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Tables\Builders\CustomerTable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class CustomerTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = CustomerTable::class;
}
