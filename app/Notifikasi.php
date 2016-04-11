<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi';

    protected $fillable = [
    	'user_id', 'link', 'No', 'status', 'created_at',
    ];
}
