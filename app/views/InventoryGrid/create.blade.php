<!--<!--///**-->-->
<!--<!--// * Created by PhpStorm.-->-->
<!--<!--// * User: LACHICA-->-->
<!--<!--// * Date: 10/6/14-->-->
<!--<!--// * Time: 5:26 PM-->-->
<!--<!--// */-->-->
<!--@extends('layouts.grid')-->
<!---->
<!--@section('title')-->
<!--Add New Supplier-->
<!--@stop-->
<!---->
<!--@section('view')-->
<!--{{ Form::open(['route' => 'InventoryGrid.store', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}-->
<!--<div class="pure-control-group" >-->
<!--    {{ Form::label('id', 'ID: ') }}-->
<!--    {{ Form::text('id') }}-->
<!--</div>-->
<!--<div class="pure-control-group">-->
<!--    {{ Form::label('product_id', 'Product Name:') }}-->
<!--    {{ Form::text('product_id') }}-->
<!--</div>-->
<!--<div class="pure-control-group">-->
<!--    {{ Form::label('quantity', 'Quantity:') }}-->
<!--    {{ Form::text('quantity') }}-->
<!--</div>-->
<!--<div class="pure-control-group">-->
<!--    {{ Form::label ('transaction_type_id', 'Type:') }}-->
<!--    {{ Form::text('transaction_type_id') }}-->
<!--</div>-->
<!--<div style="position: static">-->
<!--<div class="pure-controls" style="float:left; width:0px" >-->
<!--    <input class="pure-button pure-button-primary" type="submit" value="Save" style="width:70px ;position: absolute">-->
<!--</div>-->
<!---->
<!--<div class="pure-controls" style="float: left">-->
<!--    <a class="pure-button pure-button-primary" style="width: 50px;position: absolute" href="{{ route ('InventoryGrid.index')}}" }}">Cancel</a>-->
<!--</div>-->
<!---->
<!--{{ Form::close() }}-->
<!---->
<!--@stop-->