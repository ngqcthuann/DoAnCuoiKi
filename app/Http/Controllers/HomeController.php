<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\redirect;
session_start();

class HomeController extends Controller
{
    public function index(){

        $cate_product =  DB::table('tbl_category_product')->orderby('category_id','desc')->get();

        $brand_product =  DB::table('tbl_brand')->orderby('brand_id','desc')->get();

        // $all_product = DB::table('tbl_product')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        // ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        // ->orderby('tbl_product.product_id','desc')->get();

        $all_product =  DB::table('tbl_product')->orderby('product_id','desc')->limit(30)->get();

        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
}
