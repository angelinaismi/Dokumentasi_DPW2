<form action="{{$url}}"method="post" class="form-inline" onsubmit="return confirm('Sure want to delete this data?')">
    @csrf
    @method("delete")                                    
    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>                                    
 </form>                                                                        