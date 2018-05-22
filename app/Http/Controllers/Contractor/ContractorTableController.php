<?php

namespace App\Http\Controllers\Contractor;

use App\Http\Controllers\Controller;
use App\Tables\Builders\ContractorTable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class ContractorTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = ContractorTable::class;
}
