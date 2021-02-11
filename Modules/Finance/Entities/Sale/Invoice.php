<?php

namespace Modules\Finance\Entities\Sale;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\InvoiceFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return InvoiceFactory::new();
    }
}
