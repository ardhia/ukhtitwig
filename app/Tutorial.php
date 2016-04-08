<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = 'tutorial';

    protected $fillable = [
        'No', 'user_id', 'Judul_Tutorial', 'Isi_Tutorial', 'Photo', 'user_name',
    ];

}
