<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_super_admin extends Model
{
        protected $fillable = [
        's_code', 's_email', 's_password','s_user_role',
    ];

        protected $hidden = [
        'password', 'remember_token',
    ];

        protected $casts = [
        'email_verified_at' => 'datetime',
    ];

         public function roles()
    {
        return $this
            ->belongsToMany('App\Role')
            ->withTimestamps();
    }


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
