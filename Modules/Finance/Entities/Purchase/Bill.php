<?php

namespace Modules\Finance\Entities\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\BillFactory;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return BillFactory::new();
    }
}
