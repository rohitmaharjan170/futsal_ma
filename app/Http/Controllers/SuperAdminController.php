<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:ROLE_SUPERADMIN');
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
}
