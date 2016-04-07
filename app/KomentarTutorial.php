<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarTutorial extends Model
{
    protected $table = 'komentar_tutorial';

    protected $fillable = [
    	'nama', 'isi_komentar', 'No', 'no_tutorial', 'created_at',
    ];
}
