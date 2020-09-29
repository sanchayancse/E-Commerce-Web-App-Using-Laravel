<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Session;
class CheckoutController extends Controller
{
    public function login_check(){
        return view('pages.login');
    }


    public function customer_registration(Request $request){
        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['password']=md5($request->password);
        $data['phone_number']=$request->phone_number;


        $customer_id=DB::table('tbl_customer')
                    ->insertGetId($data);
                    

                Session::put('customer_id',$customer_id);
                Session::put('customer_name',$request->customer_name);
                return Redirect('/checkout');

                


    }

    public function customer_login(Request $request){


        $customer_email=$request->customer_email;
        $password=md5($request->password);

        $result=DB::table('tbl_customer')
                ->where('customer_email',$customer_email)
                ->where('password',$password)
                ->first();

            if($result){
                Session::put('customer_id',$result->customer_id);
                return Redirect::to('/checkout');
            }else{
                return Redirect::to('/login-check');

            }

    }

    public function customer_logout(){
        Session::flush();
        return Redirect::to('/');
    }

    public function checkout(){
        return view('pages.checkout');
    }

    public function save_shipping_detaisl(Request $request){

        $data=array();
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_fullname']=$request->shipping_fullname;
        $data['shipping_phone_number']=$request->shipping_phone_number;
        $data['shipping_city']=$request->shipping_city;
        $data['shipping_address']=$request->shipping_address;

            $shipping_id = DB::table('tbl_shipping')
                ->insertGetId($data);

                Session::put('shipping_id',$shipping_id);

                return Redirect::to('/payment');

    }
}



