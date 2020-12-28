<?php

namespace App\Http\Controllers\Registers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tbl_player;
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
          'p_mobile' => 'required|integer|digits:10|min:0',
          'p_city' => 'required|string|max:30',
          'p_district' => 'required|string|max:30',
          'p_zone' => 'required|string|max:30',
          'p_email' => 'required|string|email|max:255|unique:tbl_players',
          'p_password' => 'required|string|min:8|confirmed',
          'p_password_confirmation' => 'required',
      ]);

      tbl_player::create([
          'p_first_name' => $request->p_first_name,
          'p_middle_name' => $request->p_middle_name,
          'p_last_name' => $request->p_last_name,
          'p_mobile' => $request->p_mobile,
          'p_city' => $request->p_city,
          'p_district' => $request->p_district,
          'p_zone' => $request->p_zone,
          'p_email' => $request->p_email,
          'p_password' => Hash::make($request->p_password),
      ]);


      return redirect('master_index.player_dashboard');
  }

}
