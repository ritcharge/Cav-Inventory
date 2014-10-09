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

@stop