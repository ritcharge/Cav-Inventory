
/**
 * Created by PhpStorm.
 * User: LACHICA
 * Date: 10/6/14
 * Time: 10:39 AM
 */
@extends('layouts.grid')

@section('title')
    Suppliers
@stop

@section('toolbar')
    <a class="pure-button pure-button-primary">Add Supplier</a>
@stop

@section('table-headers')
    <th></th>
    <th>Company</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Contact Person</th>
    <th>Action</th>
@stop

@section('table-contents')
    @foreach(Supplier::all() as $supplier)
        <tr>
            <td>
                <!--TEMPORARY. REPLACE WITH PROPER CHECKBOX THRU FORMBUILDER-->
                <input type="checkbox" class="pure-checkbox"/>
            </td>
            <td>
                {{ $suppliers->company }}
            </td>
            <td>
                {{ $suppliers->address}}
            </td>
            <td>
                {{ $suppliers->contact }}
            </td>
            <td>
                {{ $suppliers->contact_person }}
            </td>
            <td>
                <a class="pure-button">Edit</a>
            </td>
        </tr>
@endforeach
@stop
