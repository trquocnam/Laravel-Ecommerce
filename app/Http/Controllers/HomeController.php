<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
    	$cate_product = FacadesDB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = FacadesDB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
         $all_product = FacadesDB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get(); 
    	return view('frontend.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $cate_product = FacadesDB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = FacadesDB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 
        $search_product = FacadesDB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 
        return view('frontend.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }

    
}
