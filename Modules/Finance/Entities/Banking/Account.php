<?php

namespace Modules\Finance\Entities\Banking;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\AccountFactory;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return AccountFactory::new();
    }
}
