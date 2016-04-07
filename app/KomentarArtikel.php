<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarArtikel extends Model
{
    protected $table = 'komentar_artikel';

    protected $fillable = [
    	'nama', 'isi_komentar', 'No', 'no_artikel', 'created_at',
    ];
}
