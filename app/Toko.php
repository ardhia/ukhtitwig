<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'toko';

    protected $fillable = [
        'idToko', 'user_id', 'Judul', 'harga', 'jb', 'ketToko', 'photoToko', 'artikel',
    ];
}
