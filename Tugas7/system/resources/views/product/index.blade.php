@extends('template2.base')

@section('content')

    <div class="container">
        <div class="row">
             <div class="col-md-12  mt-5">
                <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/product/filter')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$name ?? ""}}"> 
                            </div>
                            <div class="form-group">
                                <label class="control-label">Stock</label>
                                <input type="text" class="form-control" name="stock" value="{{$stock ?? ""}}"> 
                            </div> 
                            <div class="row">
                             <div class="col-md-6">  
                            <div class="form-group">
                                <label class="control-label">Price Min</label>
                                <input type="text" class="form-control" name="price_min" value="{{$price_min ?? ""}}"> 
                            </div>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group">
                                   <label class="control-label">Price Max</label>
                                   <input type="text" class="form-control" name="price_max" value="{{$price_max ?? ""}}"> 
                                </div>
                            </div>   
                         </div> 
                        <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                    </form>
                </div>
             </div>
             <div class="card">
                 <div class="card-header">
                     Data Product
                     <a href="{{url('admin/product/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Add Data</a>
                     </div>   
                     <div class="card-bodoy">
                         <table class="table table-datatable"> 
                             <thead>
                                <th>No</th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                            </thead>
                            <tbody>
                                @foreach($list_product as $product)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>
                                    <div class="btn-group">       
                                    <a href="{{url('admin/product', $product->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                    <a href="{{url('admin/product', $product->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    @include('template.utils.delete', ['url' => url('admin/product', $product->id)])
                                    </div>
                                </td>
                                   <td>{{$product->name}}</td>
                                   <td>{{$product->price}}</td>
                                   <td>{{$product->stock}}</td>
                               </tr>
                               @endforeach
                            </tbody>
                         </table>               
                     </div>                          
                 </div>                                  
             </div>                            
         </div>                                
     </div>


@endsection