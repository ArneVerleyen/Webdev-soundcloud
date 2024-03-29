<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'id',
        'amount',
        'currency',
        'description',
        'message',
    ];
}
