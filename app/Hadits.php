<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadits extends Model
{
    $users = User::where('votes', '>', 100)->paginate(5);
}
