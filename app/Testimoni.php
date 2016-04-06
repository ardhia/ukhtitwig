<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';

    protected $fillable = [
        'nama', 'email', 'isiTestimoni', 'No', 'Photo',
    ];
}
