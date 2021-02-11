<?php

namespace Modules\Finance\Entities\Common;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Finance\Database\factories\ContactFactory;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return ContactFactory::new();
    }
}
