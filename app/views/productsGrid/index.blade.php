@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')
<a href="{{ route('productsGrid.create') }}">Add Product</a>
@stop

@section('table-headers')
<th></th>
<th>Name</th><!-- brand + name -->
<th>Price</th>
<th>Quantity</th>
<th>Type</th>
@stop

@section('table-contents')
@foreach(Product::all() as $product)

<tr>
    <td><!-- CHECKBOX --></td>
    <td>{{ '$product->brand()->name $product->name' }}</td>
    <td>{{ $product->selling_price }}</td>
    <td>{{ $product->quantity }}</td>
    <td>{{ $product->type()->description }}</td>
</tr>

@endforeach
@stop