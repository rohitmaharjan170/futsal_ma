<?php

namespace App\Http\Controllers\Logins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PlayerLoginController extends Controller
{


    public function authenticate(Request $request)
    {
        $request->validate([
            'p_email' => 'required|string|email',
            'p_password' => 'required|string',
        ]);

        $credentials = $request->only('p_email', 'p_password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('master_index.player_dashboard');
        }

        return redirect('loginplayer')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();

      return redirect('loginplayer');
    }


}