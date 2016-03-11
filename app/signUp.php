<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signUp extends Model
{
    protected $table = 'signup';

    protected $fillable = [
        'nama_lengkap', 'username', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'email', 'al_email', 'password',
    ];
}
