<?php

namespace Modules\Finance\Entities\Banking;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\TransactionFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return TransactionFactory::new();
    }
}
