<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_insertToko extends Model
{
    protected $table = 'toko';

    protected $fillable = [
        'judulToko', 'photoToko', 'harga', 'jb', 'ketToko',
    ];
}
