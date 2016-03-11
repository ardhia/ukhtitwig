<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_insertTutorial extends Model
{
    protected $table = 'tutorial';

    protected $fillable = [
        'Judul_Tutorial', 'Isi_Tutorial',
    ];
}
