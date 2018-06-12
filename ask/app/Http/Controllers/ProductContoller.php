<?php

namespace App\Http\Controllers;

use App\Product as Product;
use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    function index(){
        $arrProduct = Product::all();
        
        return view('products',array('arrProduct'=>$arrProduct));
        
    }
}
