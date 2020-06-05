<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'id',
        'title',
        'artist',
        'description',
        'released',
        'created_at',
        'img_url',
    ];
    //
}
