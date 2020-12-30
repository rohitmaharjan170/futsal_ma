<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class tbl_player extends Model
{
      
      protected $fillable = [
       'p_first_name','p_last_name','p_mobile','p_city','p_district','p_zone', 'p_email', 'p_password','p_role',
    ];

        protected $hidden = [
        'password', 'remember_token',
    ];

        protected $casts = [
        'email_verified_at' => 'datetime',
    ];


         
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
          } else {
            if ($this->hasRole($roles)) {
              return true;
            }
          }
          return false;
        }

        public function hasRole($role)
        {
          if ($this->roles()->where(‘role’, $role)->first()) {
            return true;
          }
          return false;
        }
}
