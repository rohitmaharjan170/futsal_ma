<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tbl_futsal_admin;
use App\User;
use App\Role_User;
Use Auth;
use Hash;

class FutsalRegisterController extends Controller
{


  public function store_futsal_admin(Request $request)
  {
      $request->validate([
          'futsal_name' => 'required|string|max:45',
          'futsal_owner' => 'required|string|max:30',
          'mobile' => 'required|integer|digits:10|min:0|unique:Users',
          'f_pan' => 'required|integer|digits:9|unique:tbl_futsal_admins',
          'futsal_lattitude' => 'required|between:0,9999.9999',
          'futsal_longitude' => 'required|between:0,9999.9999',
          'futsal_city' => 'required|string|max:30',
          'futsal_district' => 'required|string|max:30',
          'futsal_zone' => 'required|string|max:30',
          'email' => 'required|string|email|max:255|unique:Users',
          'f_password' => 'required|string|min:8|confirmed',
          'f_password_confirmation' => 'required',
          'u_role_id' => 'required',

      ]);
      //dd($request->all());

     User::create([

          'u_role_id' => $request->u_role_id,
          'email' => strtolower( $request->email),
          'password' => Hash::make($request->f_password),
          'mobile' => $request->mobile,
      ]);


      $currentUser = User::where('email', $request->email)->first();

      tbl_futsal_admin::create([
          'f_u_id' => $currentUser->id,
          'f_name' =>strtolower( $request->futsal_name),
          'f_owner' => strtolower( $request->futsal_owner),
          'f_mobile' => $request->mobile,
          'f_pan' => $request->f_pan,
          'f_lattitude' => $request->futsal_lattitude,
          'f_longitude' => $request->futsal_longitude,
          'f_city' => strtolower( $request->futsal_city),
          'f_district' => strtolower( $request->futsal_district),
          'f_zone' => strtolower( $request->futsal_zone),
          'f_u_email' => strtolower( $request->email),
          'f_u_password' => Hash::make($request->f_password),
      ]);

      Role_User::create([
          'role_id' => $request->u_role_id,
          'user_id' => $currentUser->id,
      ]);

     return redirect('/login');
  }

}
