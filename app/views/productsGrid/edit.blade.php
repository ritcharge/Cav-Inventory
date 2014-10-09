@extends('layouts.default')

@section('title')
Edit Product
@stop

@section('view')
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', class' => '*class goes here*'] -->
{{ Form::open(['route' => ['productsGrid.update', $id], 'method' => 'PUT']) }}

<?php
// Get the user referred to for this edit
$product = Product::find($id);
?>

{{ Form::label('product_type_id', 'Product Type') }}
{{ Form::select('product_type_id', ProductType::lists('description', 'id'), $product->product_type_id) }}

{{ Form::label('brand_id', 'Brand') }}
{{ Form::select('brand_id', Brand::lists('name', 'id'), $product->brand_id) }}

{{ Form::label('product_name', 'Product Name') }}
{{ Form::text('product_name', $product->product_name) }}

{{ Form::label('quantity', 'Quantity') }}
{{ Form::number('quantity', $product->quantity) }}

{{ Form::label('selling_price', 'Selling Price') }}
{{ Form::number('selling_price', $product->selling_price) }}

{{ Form::submit('Save') }}

{{ Form::close() }}
@stop