<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\CommentsManager\app\Traits\Commentable;
use LaravelEnso\AddressesManager\app\Traits\Addressable;
use LaravelEnso\DocumentsManager\app\Traits\Documentable;
use Scottlaurent\Accounting\ModelTraits\AccountingJournal;

class Invoice extends Model
{
    use Commentable, Documentable, Addressable, AccountingJournal;

    protected $fillable = ['customer_id', 'amount', 'is_active', 'status_id', 'due_date', 'invoiced_date', 'description'];

    protected $dates = ['created_at'];

    protected $attributes = ['is_active' => false];

    protected $casts = ['is_active' => 'boolean'];
}
