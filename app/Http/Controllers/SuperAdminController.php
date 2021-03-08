<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\tbl_player;
use App\tbl_futsal_admin;
use App\User;
use App\Role_User;

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
    public function updatePlayer($p_u_id, $firstName, $lastName, $middleName){
        // return p_u_id;
       if($firstName == "-") {
            $firstName = NULL;
        }
        if($lastName == "-") {
            $lastName = NULL;
        }
        if($middleName == "-") {
            $middleName = NULL;
        }
        
        tbl_player::where('p_u_id', $p_u_id)->update(array('p_first_name' => $firstName,'p_last_name' => $lastName, 'p_middle_name' => $middleName));

        return response()->json(['message'=>'Player have been updated successfully !!']);

    }
    public function deletePlayer($p_u_id){
      
       $currentUser = User::where('id', $p_u_id)->first(); 
         // dd($currentUser->id);
        if($currentUser) {
            User::destroy($currentUser->id);
        }
        
        return response()->json(['message'=>'Player have been deleted successfully !!']);
    }



    // futsal management
    public function listFutsals()
    {
        $futsals=tbl_futsal_admin::all();

        return $futsals;
    }

    public function deleteFutsal($f_u_id){
      
         tbl_futsal_admin::destroy($f_u_id);

        $currentRoleFutsal = Role_User::where('user_id', $f_u_id)->first(); 
        if($currentRoleFutsal) {
            Role_User::destroy($currentRoleFutsal->user_id);
        }

        $currentUser = User::where('id', $f_u_id)->first(); 
         // dd($currentUser->id);
        if($currentUser) {
            User::destroy($currentUser->id);
        }
        
        return response()->json(['message'=>'Futsal Admin have been deleted successfully !!']);
    }
}
