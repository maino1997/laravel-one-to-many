<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    public $table = 'users_info';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
