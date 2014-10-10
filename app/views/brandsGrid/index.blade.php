
@extends('layouts.grid')

@section ('title')
    Brands

@stop

@section('toolbar')

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delete </h4>
            </div>
            <div class="modal-body">
                <p>Do you want to delete this Brand?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Delete</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('table-headers')
    <th></th>
    <th></th>
    
    <th>Brand Name</th>
    <th>Action</th>
@stop

@section('table-contents')
    @foreach(Brand::all() as $brand)
        <tr>
            <td>
                TEMPORARY. REPLACE WITH PROPER CHECKBOX THRU FORMBUILDER
                {{ Form::checkbox('for_delete[]', $brand->id, false, ['class' => 'pure-checkbox']) }}
            </td>
            <td>
            </td>
            <td>
                {{ $brand->brand_name }}
            </td>
            <td>
                <a class="pure-button" href="{{ route('brandsGrid.edit', $brand->id) }}"> Edit</a>
            </td>
        </tr>
    @endforeach
@stop
