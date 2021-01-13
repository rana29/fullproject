<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class communicate extends Model
{
    protected $fillable = [
        'address', 'mobile','email','message','name',
    ];
}
