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

    function filter(){
      $name = request('name');
      $stock = explode(",", request('stock'));
      $data['price_min'] = $price_min = request('price_min');
      $data['price_max'] = $price_max = request('price_max');
      //$data['list_product'] = Product::where('name','like', "%$name%")->get();
      //$data['list_product'] = Product::whereIn('stock', $stock)->get();
      //$data['list_product'] = Product::whereBetween('price', [$price_min, $price_max])->get();
      //$data['list_product'] = Product::where('stock','<>', $stock)->get();
      //$data['list_product'] = Product::whereNotIn('stock', $stock)->get();
      //$data['list_product'] = Product::whereNotBetween('price', [$price_min, $price_max])->get();
      //$data['list_product'] = Product::whereNull('stock')->get();
      //$data['list_product'] = Product::whereNotNull('stock')->get();
      //$data['list_product'] = Product::whereDate('created_at', ['2022-08-10','2022-09-10'])->get();
      $data['list_product'] = Product::whereBetween('price', [$price_min, $price_max])->whereNotIn('stock', [5000])->whereYear('created_at',2022 )->get();
      //$data['stock'] = request('stock');
      return view('product.index', $data);
    }
}