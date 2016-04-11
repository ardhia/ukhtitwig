<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'No', 'user_id', 'Judul_Artikel', 'Isi_Artikel', 'Photo', 'user_name'
    ];
}
