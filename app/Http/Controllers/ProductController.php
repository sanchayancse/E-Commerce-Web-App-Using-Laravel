<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
class ProductController extends Controller
{
    public function index(){

        return view('admin.add_product');
    }


    public function save_product(Request $request){
       
        $data = array();
       
        $data['product_name'] =$request -> product_name;
        $data['category_id'] =$request -> category_id;
        $data['manufacture_id'] =$request -> manufacture_id;
        $data['product_short_description'] =$request -> product_short_description;
        $data['product_long_description'] =$request -> product_long_description;
        $data['product_price'] =$request -> product_price;
        $data['product_size'] =$request -> product_size;
        $data['product_color'] =$request -> product_color;
        $data['publication_status'] =$request -> publication_status;

       
        $image = $request-> file('product_image');
        if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['product_image'] = $image_url;

                DB::table('tbl_products')
                    ->insert($data);
                    Session::put('message','Product added successfully');
                    return Redirect::to('/add-product');
            }

        }
        $data['product_image']='';
            DB::table('tbl_products')->insert($data);
            Session::put('message','Product added successfully without Image');
                    return Redirect::to('/add-product');


      
    // echo "<pre>";
    // print_r($data);
    // echo"</pre>";

    }

}
