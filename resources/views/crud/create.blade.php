@extends('main')
@section('content')
<div class="page-header">
    <h1>Create Product</h1>
</div>

 
<!-- html form here where the product information will be entered -->
<form action="{{ url('store') }}" method="post">
    {{-- <input type="hidden" name="_method" value="POST"> --}}

{{ csrf_field() }}
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name='description' class='form-control'></textarea></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='/' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>
@endsection
