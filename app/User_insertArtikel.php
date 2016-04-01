<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_insertArtikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'Judul_Artikel', 'Isi_Artikel', 'No', 'user_id',
    ];
}
