@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')
{{ Form::open(['route' => ['productsGrid.destroy', 'delete'], 'method' => 'delete']) }}
<a href="{{ route('productsGrid.create') }}">Add Product</a>
{{ Form::submit('Delete') }}
@stop

@section('table-headers')
<th></th>
<th>Name</th><!-- brand + name -->
<th>Price</th>
<th>Quantity</th>
<th>Type</th>
<th>Actions</th>
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
        <a href="{{ route('productsGrid.edit', $product->id) }}">Edit</a>
    </td>
</tr>

@endforeach

{{ Form::close() }}

@stop