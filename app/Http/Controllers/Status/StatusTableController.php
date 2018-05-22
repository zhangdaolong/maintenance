<?php

namespace App\Http\Controllers\Status;

use App\Http\Controllers\Controller;
use App\Tables\Builders\StatusTable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use LaravelEnso\VueDatatable\app\Traits\Datatable;

class StatusTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = StatusTable::class;
}
