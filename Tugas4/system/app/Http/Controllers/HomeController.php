<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showHome(){
        return view('template2.home');                                
    }                       
    
    function showCategory(){
        return view('template2.category');                                
    }

    function showProduct(){
        return view('template2.product');                                
    }

    function showPromo(){
      return view('template2.promo');   
    }        
    
}
