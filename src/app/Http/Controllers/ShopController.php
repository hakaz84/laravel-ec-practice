<?php

namespace App\Http\Controllers;

use App\Models\Models\Stock;

use App\Models\Models\Cart;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() 
    {
       $stocks = Stock::Paginate(6); //Eloquantで検索
       return view('shop',compact('stocks'));
    }

    public function myCart()
   {
       $my_carts = Cart::all();
       return view('mycarts',compact('my_carts'));
       
   }
}
