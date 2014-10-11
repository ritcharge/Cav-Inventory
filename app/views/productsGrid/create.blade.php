@extends('layouts.default')

@section('title')
Add New Product
@stop

@section('view')
<div><h2>Add New Product</h2></div>
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', 'class' => '*class goes here*'] -->
{{ Form::open(['route' => 'productsGrid.store', 'class' => 'pure-form pure-form-aligned']) }}

<div class="pure-control-group">
{{ Form::label('product_type_id', 'Product Type:') }}
{{ Form::select('product_type_id', ProductType::lists('description', 'id'), 1) }}
</div>

<div class="pure-control-group">
{{ Form::label('brand_id', 'Brand:') }}
{{ Form::select('brand_id', Brand::lists('name', 'id'), 1) }}
</div>
    
<div class="pure-control-group">
{{ Form::label('product_name', 'Product Name:') }}
{{ Form::text('product_name') }}
</div>

<div class="pure-control-group">
{{ Form::label('quantity', 'Quantity:') }}
{{ Form::number('quantity', '1') }}
</div>

<div class="pure-control-group">
{{ Form::label('selling_price', 'Selling Price') }}
{{ Form::number('selling_price', '0.00') }}
</div>

<div class="pure-controls">
{{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
</div>
    
{{ Form::close() }}
@stop