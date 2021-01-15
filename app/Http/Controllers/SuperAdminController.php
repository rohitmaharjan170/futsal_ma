<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tbl_player;
use App\tbl_futsal_admin;

class SuperAdminController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->middleware('role:ROLE_SUPERADMIN');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function master_admin()
    {
        return view('admin.master_admin');
    }

           
    //Player Management
    public function listPlayers()
    {
         // dd("test");
        //db ko sab data
        $players=tbl_player::all();

        return $players;
    }

    public function listFutsals()
    {
        $futsals=tbl_futsal_admin::all();

        return $futsals;
    }
}
