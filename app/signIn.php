<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SignIn extends Model
{
    protected $table = 'signin';

    protected $fillable = [
        'email', 'password',
    ];
}
