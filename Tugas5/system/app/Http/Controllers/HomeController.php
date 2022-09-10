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

    function test($product,$hargaMin = 0,$hargaMax = 0){
        if($product == 'tas'){
         echo "Tampilkan Product Tas";
        }elseif($product == 'dompet'){
          echo "product dompet";
        }
        echo "<br>";
        echo "Harga Min adalah $hargaMin <br>";
        echo "Harga Max adalah $hargaMax <br>";
    }
        
}
