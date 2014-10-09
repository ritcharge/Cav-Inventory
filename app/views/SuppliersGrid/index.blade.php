<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: LACHICA-->
<!-- * Date: 10/6/14-->
<!-- * Time: 10:39 AM-->
<!-- */-->
@extends('layouts.grid')

@section('title')
    Suppliers
@stop

@section('toolbar')

      <div style="float: left"><a class="pure-button pure-button-primary" href="{{ route('SuppliersGrid.create') }}">Add Supplier</a></div>
<div style="position: static">
    {{ Form::open(['route' => ['SuppliersGrid.destroy', 'delete'], 'method'=>'DELETE'])}}
    <input class="pure-button pure-button-primary" type="submit" value="Delete Supplier" style="width:140px ;position: absolute">

  </div>
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
<!--    @foreach(Supplier::all() as $suppliers)-->
<!--        <tr>-->
<!--            <td>-->
<!--                <!--TEMPORARY. REPLACE WITH PROPER CHECKBOX THRU FORMBUILDER-->-->
<!--                <input type="checkbox" class="pure-checkbox" name="for_delete[]" value="{{ $suppliers->id }}"/>-->
<!--            </td>-->
<!--            <td>-->
<!--                {{ $suppliers->company }}-->
<!--            </td>-->
<!--            <td>-->
<!--                {{ $suppliers->address}}-->
<!--            </td>-->
<!--            <td>-->
<!--                {{ $suppliers->contact }}-->
<!--            </td>-->
<!--            <td>-->
<!--                {{ $suppliers->contact_person }}-->
<!--            </td>-->
<!--            <td>-->
<!--                <a class="pure-button" href="{{ route('SuppliersGrid.edit', $suppliers->id) }}" >Edit</a>-->
<!--            </td>-->
<!--        </tr>-->
<!--@endforeach-->
@stop
