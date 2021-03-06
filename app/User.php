<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'al_email', 'photoProfil', 'alamat', 'noHP', 'kesukaan', 'kutipanHadits', 'statusUser', 'contactUs', 'konfirmasi', 'signed',
        ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
