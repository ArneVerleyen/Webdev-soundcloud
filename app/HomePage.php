<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'header',
        'titel_albums',
        'uitleg',
        'abonneer',
        'abonneer_btn',
        'doneer',
        'doneer_btn',
        'language',
    ];
}
