@extends(layouts.default)

@section('title')
Edit Product
@stop

@section('main')
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', class' => '*class goes here*'] -->
{{ Form::open(['route' => ['productsGrid.update', $id], 'method' => 'PUT']) }}

<?php
// Get the user referred to for this edit
$product = Product::find($id);
?>

{{ Form::label('product_type_id', 'Product Type') }}
<!-- TODO: Add select form -->

{{ Form::label('brand_id', 'Brand') }}
<!-- TODO: Add select form -->

{{ Form::label('product_name', 'Product Name') }}
{{ Form::text('product_name', $product->product_name) }}

{{ Form::label('quantity'), 'Quantity' }}
{{ Form::number('quantity', $product->quantity) }}

{{ Form::label('selling_price', 'Selling Price') }}
{{ Form::number('selling_price', $product->selling_price) }}

{{ Form::submit('Save') }}

{{ Form::close() }}
@stop