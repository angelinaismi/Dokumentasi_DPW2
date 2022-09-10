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
                         <form action="{{url('admin/product')}}" method="post">   
                             @csrf                  
                         <div class="form-group">
                            <label for="" class="control-label">name</label>
                            <input type="text" name="name" id="" class="form-control">            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="" class="control-label">price</label>
                                     <input type="text" name="price" id="" class="form-control">            
                                 </div>       
                            </div>      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">weight</label>
                                    <input type="text" name="weight" id="" class="form-control">            
                                </div>          
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">stock</label>
                                    <input type="text" name="stock" id="" class="form-control">            
                                </div>    
                            </div>      
                        </div> 
                        <div class="form-group">
                            <label for="" class="control-label">description</label>
                            <textarea name="description" id="" class="form-control"></textarea>                 
                        </div> 
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>     
                         </form>                
                     </div>                          
                 </div>                                  
             </div>                            
         </div>                                
     </div>
@endsection