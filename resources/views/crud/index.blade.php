@extends('main')
@section('content')
<div class="page-header">
    <h1>Read Products</h1>
</div>

<div class="row">
    <div class="col-md-12">
        @include('partials.messages')
    </div>
</div>

<a href='/create' class='btn btn-primary m-b-1em'>Create New Product</a>
   <table class='table table-hover table-responsive table-bordered'>
    
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Action</th>
    </tr>
 
    

    
        @foreach ($crud_details as $crud_detail)
        <tr>
        <td>{{$crud_detail->id}}</td>
        <td>{{$crud_detail->name}}</td> 
        <td>{{$crud_detail->description}}</td>
        <td>{{$crud_detail->price}}</td>
        <td>
            <a href='' class='btn btn-info m-r-1em'>Read</a>
            <a href="{{ url('/edit/' . $crud_detail->id ) }}" class='btn btn-primary m-r-1em'>Edit</a>
            <a href='' onclick=''  class='btn btn-danger'>Delete</a>
        </td>
        </tr>
        @endforeach
    
    

    </table>
    <div class="col text-right">
        @if($crud_details->count() >= 1)
            {{ $crud_details->count() }} data found
        @else
        No records found.
        @endif
    </div><!--row-->
 
@endsection
       
<script type='text/javascript'>
function delete_user( id ){
     
    var answer = confirm('Are you sure?');
    if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?id=' + id;
    } 
}
</script>