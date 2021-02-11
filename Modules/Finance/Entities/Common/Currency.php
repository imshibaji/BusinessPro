<?php

namespace Modules\Finance\Entities\Common;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\CurrencyFactory;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return CurrencyFactory::new();
    }
}
