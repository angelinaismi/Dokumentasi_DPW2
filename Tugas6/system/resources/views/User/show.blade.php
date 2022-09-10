@extends('template2.base')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12  mt-5">
                 <div class="card">
                     <div class="card-header">
                          Detail Product User  
                     </div>   
                     <div class="card-body">
                        <h3>{{$user->name}}</h3>
                        <hr>
                        <p>
                           {{"@".$user->username}} |
                           email : {{$user->email}}
                        </p>
                    </div>                          
                </div>                                  
            </div>                            
        </div>                                
    </div>
@endsection