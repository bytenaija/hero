<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
         'email',
        'phone_number',
        'subject',
        'message'
        ];
}
