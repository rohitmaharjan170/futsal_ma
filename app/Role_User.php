<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    protected $fillable = [
        'role_id', 'user_id',
    ];

    protected $table = 'role_user';
    public $timestamps = true;
    protected $primaryKey = 'user_id';

}
