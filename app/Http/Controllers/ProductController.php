<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session ;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    function index() //fonctions qui nous retourne la vue product qui contient touts les articles disponibles
    {
        $x = Product::all();
        return view('product',['products'=>$x]);
    }

    function detailes($id) //fonction qui nous retourne la vue detail qui contient les details des produits dans une page
    {
        $pr = Product::find($id); 
        return view('detail', ['product'=>$pr]);  
    }

    function addtocart(Request $req){ //fonction pour ajouter au panier
        if($req->session()->has('user')){ //si le client est authentifier 
         $card = new Cart ; 
         $card->user_id=$req->session()->get('user')['id'];   //a chaque fois que le client clique sur add to cart une nouvelle ligne de type Cart vien s'ajouter a la table card
         $card->product_id=$req->product_id; 
         $card->save(); 
         return redirect('/'); //apres ca le client est rediriger vers l'acceuil
        }
        else{ // sinon le client se doit de s'authentifier 
           return redirect('/login');  
        }
    }
     static function cartItem(){ //modifie l'icone du panier
         
        $userId=Session::get('user')['id']; 
        return Cart::where('user_id',$userId)->count();
    }
    function CartList(){   //cette fonction permet de lister tout les produits ajouté au panier dans la page panier
        $userId = Session::get('user')['id']; 
        $products = DB::table('card')
        ->join('products','card.product_id' , '=' , 'products.id')
        ->where('card.user_id',$userId)
        ->select('products.*','card.id as idc')
        ->get();
        
        return view('carteListe',['products'=>$products]); 

    }
    function supProduits($id){ //cette fonction nous permet de supprimer un produit du panier
            Cart::destroy($id); 
            return redirect('cartList'); 
    }
    function confirm(){ //Pour la page de confirmation pour nous donner le montant total a partir de la jointure des 2 tables products et card et 
         $userId = Session::get('user')['id']; 
        $total = $products = DB::table('card')
        ->join('products','card.product_id' , '=' , 'products.id')
        ->where('card.user_id',$userId)
        ->sum('products.prix');
        return view('confirmation' , ['total'=>$total]); 
    }

    function orderplace(Request $req){
        $userId = Session::get('user')['id'];
        $AllCard = Cart::where('user_id', $userId)->get();
        foreach($AllCard as $card){

           $order = new Order ; 
           $order->product_id=$card['product_id'];
           $order->user_id=$card['user_id']; 
           $order->status="pending"; 
           $order->payment_methode = $req->payment ; 
           $order->payment_status = "pending"; 
           $order->adresse = $req->address ;
           $order->save(); 
           Cart::where('user_id', $userId)->delete();


        }
         $req->input();
         return redirect("/"); 
    }

    function orderF(){
        $userId = Session::get('user')['id']; 
        $orders= $products = DB::table('orders')
        ->join('products','orders.product_id' , '=' , 'products.id')
        ->where('orders.user_id',$userId)
        ->get(); 

        return view ('commandes', ['orders'=>$orders]) ; 
    }

    
}
