<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class SuperAdminController extends Controller
{
    

    public function index(){
        $this -> AdminAuth();
        return view('admin.dashboard');
    }

    public function logout(){

        // Session::put('admin_name',null);
        // Session::put('admin_id',null);

        Session::flush();
        return Redirect::to('/admin');
    }

    public function AdminAuth(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/admin')->send();
        }
    }
}
