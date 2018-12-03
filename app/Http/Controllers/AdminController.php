<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();
class AdminController extends Controller
{
   public function index()
    {
		
	  $admin_id = Session::get('id');
        if($admin_id !=NULL){
            return Redirect::to('/dashboard')->send();
        }		
      return view('admin.admin_login');
    }
	
  public function adminLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;  
        $result = DB::table('tbl_admin')
               ->where('email',$email)
               ->where('password',md5($password))
               ->first();
             if($result){
               Session::put('full_name',$result->full_name);
               Session::put('id',$result->id); 
			   return Redirect::to('/dashboard');
             }else{
                 Session::put('exception','Invalid email/password');
               return Redirect::to('/admin');
            }

      
    }

}
