<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_player;
use App\User;
use App\Role_User;
Use Auth;


class PlayerController extends Controller
{

        public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware('role:ROLE_PLAYER');
    }

    public function index()
    {
        return view('master_index/index');
    }

    public function player_dashboard()
    {
        $user = Auth::user();
        $currentUser = User::where('email', $user->email)->first();
        $currentPlayer = tbl_player::where ('p_u_id', $currentUser->id)->first();
        // $player = tbl_player::$currentPlayer->all();
        // dd($currentPlayer->all());
        return view('master_index/player_dashboard',compact('currentPlayer'));
    }

}
