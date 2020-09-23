<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        
        $all_published_product =  DB::table('tbl_products') 
        ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
        ->join('manufacture', 'tbl_products.manufacture_id', '=', 'manufacture.manufacture_id')
        ->select('tbl_products.*', 'tbl_category.category_name', 'manufacture.manufacture_name')
        ->where('tbl_products.publication_status',1)
        ->limit(9)

        ->get();
        
        $mannage__published_product = view('pages.home')
            ->with('all_published_product',  $all_published_product);

        return view('welcome')
            -> with('pages.home',$mannage__published_product);


        //return view('pages.home');
    }
}
