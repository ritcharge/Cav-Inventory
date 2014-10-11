@extends('layouts.default')

@section('title')
Edit Product
@stop

@section('view')
<div><h2>Edit Product</h2></div>
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', class' => '*class goes here*'] -->
{{ Form::open(['route' => ['productsGrid.update', $id], 'method' => 'PUT', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}

<?php
// Get the user referred to for this edit
$product = Product::find($id);
?>
<div class="pure-control-group">
{{ Form::label('product_type_id', 'Product Type') }}
{{ Form::select('product_type_id', ProductType::lists('description', 'id'), $product->product_type_id) }}
</div>

<div class="pure-control-group">
{{ Form::label('brand_id', 'Brand') }}
{{ Form::select('brand_id', Brand::lists('name', 'id'), $product->brand_id) }}
</div>

<div class="pure-control-group">
{{ Form::label('product_name', 'Product Name') }}
{{ Form::text('product_name', $product->product_name) }}
</div>

<div class="pure-control-group">
{{ Form::label('quantity', 'Quantity') }}
{{ Form::number('quantity', $product->quantity) }}
</div>

<div class="pure-control-group">
{{ Form::label('selling_price', 'Selling Price') }}
{{ Form::number('selling_price', $product->selling_price) }}
</div>

 <div class="pure-controls">
{{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
</div>

{{ Form::close() }}
@stop