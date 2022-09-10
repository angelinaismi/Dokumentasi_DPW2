@extends('template2.base')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12  mt-5">
                 <div class="card">
                     <div class="card-header">
                          Add User Data  
                     </div>   
                     <div class="card-body">
                         <form action="{{url('admin/user')}}" method="post">   
                             @csrf                  
                         <div class="form-group">
                            <label for="" class="control-label">Name</label>
                            <input type="name" id="" class="form-control" name="name">   
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="username" id="" class="form-control" name="username">      
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="email"  id="" class="form-control" name="email">        
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="password"  id="" class="form-control" name="password">       
                        </div> 
                        <div class="form-group">
                            <label for="" class="control-label">No HP</label>
                            <input type="text"  id="" class="form-control" name="no_handphone">          
                        </div>    
                        
                     
                        <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>     
                         </form>                
                     </div>                          
                 </div>                                  
             </div>                            
         </div>                                
     </div>
@endsection