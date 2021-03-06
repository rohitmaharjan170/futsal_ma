<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'u_role_id','mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'u_email_verified_at' => 'datetime',
    ];


    protected $table = 'users';
    public $timestamps = true;
    protected $primaryKey = 'id';

// roles .php
    public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }


// authorize roles

    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
          return true;
        }
        abort(401, 'This action is unauthorized.');
    }


    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
              foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                  return true;
                }
          }
      } 

      else {
            if ($this->hasRole($roles)) {
              return true;
            }
          }
      return false;
    }

    public function hasRole($role)
    {
      if ($this->roles()->where('role', $role)->first()) {
        return true;
      }
      return false;
    }
  }


