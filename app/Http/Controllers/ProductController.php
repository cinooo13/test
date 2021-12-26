<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session ;
use App\Models\Product;
use App\Models\Cart;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    function index()
    {
        $x = Product::all(); 
        return view('product',['products'=>$x]);
    }

    function detailes($id)
    {
        $pr = Product::find($id); 
        return view('detail', ['product'=>$pr]);  
    }

    function addtocart(Request $req){
        if($req->session()->has('user')){
         $card = new Cart ; 
         $card->user_id=$req->session()->get('user')['id'];
         $card->product_id=$req->product_id; 
         $card->save(); 
         return redirect('/login');
        }
        else{
           return redirect('/login'); 
        }
    }
     static function cartItem(){
         
        $userId=Session::get('user')['id']; 
        return Cart::where('user_id',$userId)->count();
    }
}
