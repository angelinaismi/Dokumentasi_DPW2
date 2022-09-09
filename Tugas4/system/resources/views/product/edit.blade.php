@extends('template2.base')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12  mt-5">
                 <div class="card">
                     <div class="card-header">
                          Add Product Data  
                     </div>   
                     <div class="card-body">
                         <form action="{{url('product', $product->id)}}" method="post">   
                             @csrf         
                             @method("PUT")         
                         <div class="form-group">
                            <label for="" class="control-label">name</label>
                            <input type="text" name="name" id="" class="form-control" name="name" value="{{$product->name}}">           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="" class="control-label">price</label>
                                     <input type="text" name="price" id="" class="form-control" name="price" value="{{$product->price}}">        
                                 </div>       
                            </div>      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">weight</label>
                                    <input type="text"  id="" class="form-control" name="weight" value="{{$product->weight}}">          
                                </div>          
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">stock</label>
                                    <input type="text"  id="" class="form-control" name="stock" value="{{$product->stock}}">          
                                </div>    
                            </div>      
                        </div> 
                        <div class="form-group">
                            <label for="" class="control-label">description</label>
                            <textarea name="description" id="" class="form-control">{{$product->description}}></textarea>                 
                        </div> 
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>     
                         </form>                
                     </div>                          
                 </div>                                  
             </div>                            
         </div>                                
     </div>
@endsection