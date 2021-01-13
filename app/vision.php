<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vision extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'image'
    ];
}
