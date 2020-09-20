<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();
class ManufactureController extends Controller
{
    public function index(){

        return view('admin.add_manufacture');
    }


    public function save_manufacture(Request $request){
       
        $data = array();
        $data['manufacture_id'] =$request -> manufacture_id;
        $data['manufacture_name'] =$request -> manufacture_name;
        $data['manufacture_description'] =$request -> manufacture_description;
        $data['publication_status'] =$request -> publication_status;

        DB::table('manufacture') -> insert($data);

        Session::put('message','Manufacture added successfully');

        return Redirect::to('/add-manufacture');
        
    // echo "<pre>";
    // print_r($data);
    // echo"</pre>";

    }


    public function all_manufacture(){
       
        $all_manufacture =  DB::table('manufacture') ->get();
         $mannage_manufacture = view('admin.all_manufacture')
            ->with('all_manufacture',  $all_manufacture);

        return view('admin.admin_layout')
            -> with('admin.all_manufacture',$mannage_manufacture);



      //  return view('admin.all_category');
    }

}
