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

    return view('registers.player_register');
  }

  public function store_player(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
          'password_confirmation' => 'required',
      ]);

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => Hash::make($request->password),
      ]);

      return redirect('home');
  }

}
