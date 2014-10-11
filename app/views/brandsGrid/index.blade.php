
@extends('layouts.grid')

@section ('title')
    Brands
@stop

@section('toolbar')
    <div><h2>Brands</h2></div>
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
