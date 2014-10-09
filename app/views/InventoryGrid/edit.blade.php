<!---->
<!--<!--///**-->-->
<!--<!--// * Created by PhpStorm.-->-->
<!--<!--// * User: LACHICA-->-->
<!--<!--// * Date: 10/6/14-->-->
<!--<!--// * Time: 8:51 PM-->-->
<!--<!--// */-->-->
<!--@extends('layouts.default')-->
<!---->
<!--@section('title')-->
<!--    Edit Supplier Info-->
<!--@stop-->
<!--//-->
<!--@section('view')-->
<!--{{ Form::open(['route' => ['SuppliersGrid.update', $SuppliersGrid], 'method' => 'PATCH', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}-->
<!--        <div class="pure-control-group">-->
<!--            {{ Form::label('id', 'ID: ') }}-->
<!--            {{ Form::text('id', InventoryLog::find($InventoryGrid)->id) }}-->
<!--        </div>-->
<!--        <div class="pure-control-group">-->
<!--            {{ Form::label('product_id', 'Product Name:') }}-->
<!--            {{ Form::text('product_id', InventoryLog::find($InventoryGrid)->product_id) }}-->
<!--        </div>-->
<!--            <div class="pure-control-group">-->
<!--             {{ Form::label('quantity', 'Quantity:') }}-->
<!--             {{ Form::text('quantity', InventoryLog::find($InventoryGrid)->quantity) }}-->
<!--            </div>-->
<!--        <div class="pure-control-group">-->
<!--            {{ Form::label('transaction_type_id', 'Type:') }}-->
<!--            {{ Form::text('transaction_type_id', InventoryLog::find($InventoryGrid)->transaction_type_id) }}-->
<!--        </div>-->
<!---->
<!--        <div class="pure-controls" style="float:left;width:1px">-->
<!--            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}-->
<!--        </div>-->
<!---->
<!--        <div class="pure-controls" style="float: left; width: 1px">-->
<!--    <a class="pure-button pure-button-primary" href="{{ route ('InventoryGrid.index')}}" }}">Cancel</a>-->
<!--        </div>-->
<!--    {{ Form::close() }}-->
<!--@stop-->