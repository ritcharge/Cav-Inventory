@extends('layouts.default')

@section('title')
Add New Product
@stop

@section('view')
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', 'class' => '*class goes here*'] -->
{{ Form::open(['route' => 'productsGrid.store']) }}

{{ Form::label('product_type_id', 'Product Type') }}
<!-- TODO: Add select form -->

{{ Form::label('brand_id', 'Brand') }}
<!-- TODO: Add select form -->

{{ Form::label('product_name', 'Product Name') }}
{{ Form::text('product_name') }}

{{ Form::label('quantity'), 'Quantity' }}
{{ Form::number('quantity', '1') }}

{{ Form::label('selling_price', 'Selling Price') }}
{{ Form::number('selling_price', '0.00') }}

{{ Form::submit('Save') }}

{{ Form::close() }}
@stop