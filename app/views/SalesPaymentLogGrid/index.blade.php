
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: LACHICA-->
<!-- * Date: 10/6/14-->
<!-- * Time: 10:39 AM-->
<!-- */-->
@extends('layouts.grid')

@section('title')
Sales Payment Log
@stop

@section('toolbar')
<!---->
<!--      <div style="float: left"><a class="pure-button pure-button-primary" href="{{ route('SalesPaymentLogGrid.create') }}">Add Inventory</a></div>-->
<!--<div style="position: static">-->
<!--    {{ Form::open(['route' => ['SalesPaymentLogGrid.destroy', 'delete'], 'method'=>'DELETE'])}}-->
<!--    <input class="pure-button pure-button-primary" type="submit" value="Delete Inventory Log" style="width:140px ;position: absolute">-->
<!---->
<!--  </div>-->
@stop

@section('table-headers')
<th></th>
<th>ID</th>
<th>Sales ID</th>
<th>Amount</th>
<th>Receipt No.</th>
<!--    <th>Action</th>-->
@stop

@section('table-contents')
@foreach(SalesPaymentLog::all() as $salespayment)
<tr>
    <td>
        <!--        TEMPORARY. REPLACE WITH PROPER CHECKBOX THRU FORMBUILDER-->
        <input type="checkbox" class="pure-checkbox" name="for_delete[]" value="{{ $salespayment->id }}"/>
    </td>
    <td>
        {{ $salespayment->id }}
    </td>
    <td>
        {{ $salespayment->sales_id}}
    </td>
    <td>
        {{ $salespayment->amount}}
    </td>
    <td>
        {{ $salespayment->receipt_number }}
    </td>
    <td>
        <a class="pure-button" href="{{ route('SalesPaymentLogGrid.edit', $salespayment->id) }}" >Edit</a>
    </td>
</tr>
@endforeach
@stop
