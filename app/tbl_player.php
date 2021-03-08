<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class tbl_player extends Model
{

    // protected $guarded = ['p_id'];
    // protected $hidden = [
    //  'p_password', 'remember_token',
    // ];
    // public function getAuthPassword()
    // {
    //  return $this->p_password;
    // }


      protected $fillable = [
       'p_u_id','p_first_name','p_middle_name','p_last_name','p_mobile','p_city','p_district','p_zone', 'p_u_email', 'p_u_password',
    ];

        protected $hidden = [
        'password', 'remember_token',
    ];

        protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'tbl_players';
    public $timestamps = true;
    protected $primaryKey = 'p_u_id';

                                          // subin dai le sikako
                                                    // protected $appends=['roles','user'];

                                                    //  public function user()
                                                    // {
                                                    //     return $this
                                                    //         ->belongsTo('App\User');  
                                                    // }
                                          //end subeain dai le sisakao
    
    // public function User(){
    // return $this->belongsTo('App\User', 'u_id');
    // }


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
          if ($this->roles()->where("p_role", $role)->first()) {
            return true;
          }
          return false;
        }
}
