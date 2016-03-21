<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadits extends Model
{
    protected $table = 'hadits';

    protected $fillable = [
        'Isi_Hadits', 'Sumber_HR', 'Jenis_Hadits',
    ];
}
