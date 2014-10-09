@extends('layouts.default')

@section('title')
Add New Sales Invoice
@stop

@section('view')
<!-- To add a class to the form, set open() parameter as: ['route' => 'productsGrid.store', 'class' => '*class goes here*'] -->
{{ Form::open(['route' => 'salesGrid.store']) }}

{{ Form::label('cutomer_name', 'Customer Name') }}
{{ Form::text('customer_name') }}

{{ Form::label('customer_contact', 'Contact Number') }}
{{ Form::input('tel', 'customer_contact') }}

<!-- TODO: Item selection -->

{{ Form::submit('Save') }}

{{ Form::close() }}
@stop