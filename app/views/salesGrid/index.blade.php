@extends('layouts.grid')

@section('title')
Products
@stop

@section('toolbar')
<div><h2>Sales</h2></div>
{{ Form::open(['route' => ['salesGrid.destroy', 'delete'], 'method' => 'delete']) }}
<a class = "pure-button pure-button-primary" href="{{ route('salesGrid.create') }}">Add Sales Invoice</a>
<a type='button' class='pure-button' data-toggle='modal' data-target='#delete'>Delete Sales</a>
        {{ HTML::script('js/jquery-2.1.1.js') }}
        {{ HTML::script('js/bootstrap.js') }}
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
        <a class = 'pure-button' href="{{ route('salesGrid.edit', $sales->id) }}">Edit</a>
    </td>
</tr>
@endforeach

{{ Form::close() }}

@stop

        <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <!-- close button --> 
                        <h4 class="modal-title">Delete Product</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this sale/s?</p>
                    </div>
                    <div class="modal-footer">
                        {{ Form::open(['route' => ['salesGrid.destroy', 'delete'], 'method' => 'DELETE']) }}
                        {{ Form::submit('Yes', ['class' => 'btn btn-primary']) }}<!-- Button for Delete -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>  <!-- Button for Cancel -->
                    </div>
                </div>
            </div>
        </div>