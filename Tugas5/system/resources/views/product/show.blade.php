@extends('template2.base')

@section('content')
    <div class="container">
        <div class="row">
             <div class="col-md-12  mt-5">
                 <div class="card">
                     <div class="card-header">
                          Detail Product Data  
                     </div>   
                     <div class="card-body">
                        <h3>{{$product->name}}</h3>
                        <hr>
                        <p>
                            Rp. {{number_format($product->price)}} |
                            Stock : {{$product->stock}} |
                            Weight :{{$product->weight}} gr
                        </p>
                        <p>
                             {!! nl2br($product->description) !!}           
                        </p>
                    </div>                          
                </div>                                  
            </div>                            
        </div>                                
    </div>
@endsection