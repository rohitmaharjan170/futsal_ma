<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FutsalAdminController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->middleware('role:ROLE_FUTSALADMIN');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
       


    public function futsal_dashboard()
    {
        return view('master_index/futsal_dashboard');
    }


}
