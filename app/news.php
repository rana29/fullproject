<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
     protected $fillable = [
        'Date','title', 'subtitle', 'image','created','updated'
    ];
}
