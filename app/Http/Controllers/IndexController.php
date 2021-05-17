<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Banners;
use App\Category;
use App\Products;
use Illuminate\Support\Facades\Mail;
class IndexController extends Controller
{
    public function index(Request $request){
        $banners = Banners::where('status','1')->orderby('sort_order','asc')->get();
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $products = Products::paginate(3);
        $product_search=$request->input('search');
        $searchProducts=Products::where('name','like','%'.$product_search.'%')->where('status',1)->get();
        return view('wayshop.index')->with(compact('searchProducts','product_search','banners','categories','products'));
    }
    public function categories($category_id){
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $products = Products::where(['category_id'=>$category_id])->get();
        $product_name = Products::where(['category_id'=>$category_id])->first();
        return view('wayshop.category')->with(compact('categories','products','product_name'));
    }
    public function home(){
        $banners = Banners::where('status','1')->orderby('sort_order','asc')->get();
        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $products = Products::paginate(3);
        return view('wayshop.index')->with(compact('banners','categories','products'));
    }
    
    
}
