@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')

<!--
        <a class="pure-button pure-button-primary" href="{{ route('productsGrid.create') }}">Add Product</a>
        {{ Form::submit('Delete Product', ['class' => 'pure-button']) }}
-->
{{ Form::open(['route' => ['productsGrid.destroy', 'delete'], 'method' => 'delete']) }}
<div><h2>Products</h2></div>
<a class = "pure-button pure-button-primary" href="{{ route('productsGrid.create') }}">Add Product</a>
<a type='button' style = 'text-decoration: none' class='pure-button' data-toggle='modal' data-target='#delete'>Delete Product</a>
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.js"></script>   <!-- modal-content -->
@stop

@section('table-headers')
<th></th>
<th>Name</th><!-- brand + name -->
<th>Price</th>
<th>Quantity</th>
<th>Type</th>
<th>Action</th>

@stop

@section('table-contents')
@foreach(Product::all() as $product)

<tr>
    <td>{{ Form::checkbox('for_delete[]', $product->id) }}</td>
    <td>{{ $product->brand->name . ' ' . $product->product_name }}</td>
    <td>{{ $product->selling_price }}</td>
    <td>{{ $product->quantity }}</td>
    <td>{{ $product->type->description }}</td>
    <td>
        <a class = 'pure-button' href="{{ route('productsGrid.edit', $product->id) }}">Edit</a>
    </td>
</tr>

@endforeach

{{ Form::close() }}

@stop

        <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <!-- close button --> 
                        <h4 class="modal-title">Delete Product</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this product/s?</p>
                    </div>
                    <div class="modal-footer">
                        {{ Form::open(['route' => ['productsGrid.destroy', 'delete'], 'method' => 'DELETE']) }}
                        {{ Form::submit('Yes', ['class' => 'btn btn-primary']) }}<!-- Button for Delete -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>  <!-- Button for Cancel -->
                    </div>
                </div>
            </div>
        </div>