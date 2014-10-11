@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')
<div><h2>Sales</h2></div>
<a class = "pure-button pure-button-primary" href="{{ route('salesGrid.create') }}">Add Product</a>
@stop

@section('table-headers')
<th><!-- FOR CHECKBOX --></th>
<th>Sales Number</th>
<th>Customer Name</th>
<th>Contact Number</th>
<th>Balance</th>
<th>Added by</th>
<th>Actions</th>
@stop

@section('table-contents')

@foreach(Sales::all() as $sales)
    <!-- TODO: Fill grid with info -->
@endforeach

@stop