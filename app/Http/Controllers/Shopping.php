<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Shopping extends Controller
{
    public function index()
    {
      
        return view('shopping.landingpage');
    }


    public function electric()
    {
        $products = DB::table('products')
        ->join('products_details', 'products.id', '=', 'products_details.id_products')
        ->select('products.*', 'products_details.price', 'products_details.qty', 'products_details.color')


        ->whereBetween('products_details.price', [300, 5400])
        ->get();

        return view('shopping.electric',['product'=>$products]);
    }
  
    public function showCoffeeCups()
    {
        $products = DB::table('products')
            ->join('products_details', 'products.id', '=', 'products_details.id_products')
            ->select('products.*', 'products_details.price', 'products_details.qty', 'products_details.color')
            ->whereBetween('products_details.price', [50, 150])
            ->get();
    
        return view('shopping.coffee_cups', ['products' => $products]);
    }
    

    public function coffeeBeans()
    {
        $products = DB::table('products')
            ->join('products_details', 'products.id', '=', 'products_details.id_products')
            ->select('products.*', 'products_details.price', 'products_details.qty', 'products_details.color')
            ->whereBetween('products_details.price', [10, 49])
            ->get();
        return view('shopping.coffee_beans', ['products' => $products]);
    }
    
    
    

    public function add_to_cart()
    {
      $count=session::get('counter');
      $count++;
      session::put('counter',$count);
      return view('shopping.landingpage');

    }


    public function productdetails($id)
    {
        
        $producdetails=DB::table('products')
        ->join('products_details','products.id','=','products_details.id_products')
        ->where('products.id','=',$id)
        ->first();

       
        return view('shopping.product_details',['prod'=>$producdetails]);
    }


    

}