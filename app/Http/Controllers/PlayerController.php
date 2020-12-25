<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PlayerController extends Controller
{

        public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:ROLE_PLAYER');
    }

    public function index()
    {
        return view('master_index/index');
    }

    public function player_dashboard()
    {
        return view('master_index/player_dashboard');
    }
}
