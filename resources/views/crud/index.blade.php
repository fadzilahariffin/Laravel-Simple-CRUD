@extends('main')
@section('content')
<div class="page-header">
    <h1>Read Products</h1>
</div>
<div class='alert alert-success'>Record was deleted.</div>
<a href='/create' class='btn btn-primary m-b-1em'>Create New Product</a>
   <table class='table table-hover table-responsive table-bordered'>
    
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Action</th>
    </tr>
 
    
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
    <a href='' class='btn btn-info m-r-1em'>Read</a>
    <a href='' class='btn btn-primary m-r-1em'>Edit</a>
    <a href='' onclick=''  class='btn btn-danger'>Delete</a>
    </td>
    </tr>

    </table>

<div class='alert alert-danger'>No records found.</div>
 
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