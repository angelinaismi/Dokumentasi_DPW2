<?php

namespace App\Http\Controllers;
use App\Models\Product;


class ProductController extends Controller {
    function index(){
       $data['list_product'] = Product::all();
       return view('product.index', $data);
    }        
    function create(){
       return view('product.create');
    }       
    function store(){
         $product = new Product;
         $product->name = request('name');
         $product->stock = request('stock');
         $product->price = request('price');
         $product->weight = request('weight');    
         $product->description = request('description');         
         $product->save();      
         
         return redirect('product')->with('success', 'Data Successful Get Add');
    }      
    function show(Product $product){
        $data['product'] = $product;
        return view('product.show', $data);
    }            
    function edit(Product $product){
      $data['product'] = $product;
      return view('product.edit', $data);
    }   
    function update(Product $product){
      $product->name = request('name');
      $product->stock = request('stock');
      $product->price = request('price');
      $product->weight = request('weight');    
      $product->description = request('description');         
      $product->save();      
      
      return redirect('product')->with('success', 'Data Successful Get Edit');
    }
    function destroy(Product $product){
        $product->delete();

        return redirect('product')->with('danger', 'Data Successful Get Delete');
    }
}