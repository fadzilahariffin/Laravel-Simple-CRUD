@extends('main')
@section('content')
    <div class="page-header">
        <h1>Read Product</h1>
    </div>
    

    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td>{{$crud_detail->name}}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{$crud_detail->description}}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{$crud_detail->price}}</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href='/' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
@endsection 
       