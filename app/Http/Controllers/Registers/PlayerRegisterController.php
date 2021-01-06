<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tbl_player;
use App\User;
use App\Role_User;
Use Auth;
use Hash;

class PlayerRegisterController extends Controller
{
  public function register()
  {
  return redirect('/errors/404');
  }

  public function store_player(Request $request)
  {
      $request->validate([
          'p_first_name' => 'required|string|max:30',
          'p_middle_name' => 'nullable|string|max:30',
          'p_last_name' => 'required|string|max:30',
          'p_mobile' => 'required|integer|digits:10|min:0|unique:tbl_players',
          'p_city' => 'required|string|max:30',
          'p_district' => 'required|string|max:30',
          'p_zone' => 'required|string|max:30',
          'email' => 'required|string|email|max:255|unique:Users',
          'p_password' => 'required|string|min:8|confirmed',
          'p_password_confirmation' => 'required',
          'u_role_id' => 'required',
      ]);
      //dd($request->all());

     User::create([

          'u_role_id' => $request->u_role_id,
          'email' => strtolower( $request->email),
          'password' => Hash::make($request->p_password),
      ]);


      $currentUser = User::where('email', $request->email)->first();

      tbl_player::create([
          'p_u_id' => $currentUser->id,
          'p_first_name' =>strtolower( $request->p_first_name),
          'p_middle_name' => strtolower( $request->p_middle_name),
          'p_last_name' => strtolower( $request->p_last_name),
          'p_mobile' => $request->p_mobile,
          'p_city' => strtolower( $request->p_city),
          'p_district' => strtolower( $request->p_district),
          'p_zone' => strtolower( $request->p_zone),
          'p_u_email' => strtolower( $request->email),
          'p_u_password' => Hash::make($request->p_password),
      ]);

      Role_User::create([
          'role_id' => $request->u_role_id,
          'user_id' => $currentUser->id,
      ]);

      // return redirect('/playerdashboard');
      return redirect('/');
  }

}
