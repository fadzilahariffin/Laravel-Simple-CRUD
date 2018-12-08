@extends('main')
@section('content')
<div class="page-header">
    <h1>Edit Product Information</h1>
</div>

 
<!-- html form here where the product information will be entered -->
<form action="{{ url('update/'.$crud_detail->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">

{{ csrf_field() }}
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
        <td><input type='text' name='name' class='form-control' value="{{$crud_detail->name}}"/></td>
        </tr>
        <tr>
            <td>Description</td>
        <td><textarea name='description' class='form-control'>{{$crud_detail->description}}</textarea></td>
        </tr>
        <tr>
            <td>Price</td>
        <td><input type='text' name='price' class='form-control' value="{{$crud_detail->price}}"/></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Update' class='btn btn-success' />
                <a href='/' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>
@endsection
