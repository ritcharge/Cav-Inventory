@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')
{{ Form::open(['route' => ['salesGrid.destroy', 'delete'], 'method' => 'delete']) }}
<a href="{{ route('salesGrid.create') }}">Add Sales Invoice</a>
{{ Form::submit('Delete') }}

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
<tr>
    <td>{{ Form::checkbox('for_delete[]', $sales->id) }}</td>
    <td>{{ $sales->id }}</td>
    <td>{{ $sales->customer_name }}</td>
    <td>{{ $sales->customer_contact }}</td>
    <td>{{ 'Php' . ' ' . $sales->balance }}</td>
    <td>{{ $sales->addedBy->username }}</td>
    <td>
        <a href="{{ route('productsGrid.edit', $sales->id) }}">Edit</a>
    </td>
</tr>
@endforeach

{{ Form::close() }}

@stop