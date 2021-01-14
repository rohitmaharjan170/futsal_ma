<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_futsal_admin extends Model
{
      protected $fillable = [
        'f_u_id', 'f_name','f_owner','f_mobile','f_pan','f_city','f_district','f_zone', 'f_lattitude', 'f_longitude', 'f_u_email', 'f_u_password',
    ];

        protected $hidden = [
        'password', 'remember_token',
    ];

        protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'tbl_futsal_admins';
    public $timestamps = true;
    protected $primaryKey = 'f_u_id';




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
          if ($this->roles()->where("f_role", $role)->first()) {
            return true;
          }
          return false;
        }
}
