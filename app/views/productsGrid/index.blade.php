@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')
<!--
        <a class="pure-button pure-button-primary" href="{{ route('productsGrid.create') }}">Add Product</a>
        {{ Form::submit('Delete Product', ['class' => 'pure-button']) }}
-->
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

@stop