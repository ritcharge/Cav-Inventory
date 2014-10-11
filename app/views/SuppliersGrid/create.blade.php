<!--///**-->
<!--// * Created by PhpStorm.-->
<!--// * User: LACHICA-->
<!--// * Date: 10/6/14-->
<!--// * Time: 5:26 PM-->
<!--// */-->
@extends('layouts.grid')

@section('title')
Add New Supplier
@stop

@section('view')
{{ Form::open(['route' => 'SuppliersGrid.store', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
<div class="pure-control-group" >
    {{ Form::label('company', 'Company Name: ') }}
    {{ Form::text('company') }}
</div>
<div class="pure-control-group">
    {{ Form::label('address', 'Address:') }}
    {{ Form::text('address') }}
</div>
<div class="pure-control-group">
    {{ Form::label('contact', 'Contact no.:') }}
    {{ Form::text('contact') }}
</div>
<div class="pure-control-group">
    {{ Form::label ('contact_person', 'Contact Person:') }}
    {{ Form::text('contact_person') }}
</div>
<div style="position: static">
<div class="pure-controls" style="float:left; width:0px" >
    <input class="pure-button pure-button-primary" type="submit" value="Save" style="width:70px ;position: absolute">
</div>

<div class="pure-controls" style="float: left">
    <a class="pure-button pure-button-primary" style="width: 50px;position: absolute" href="{{ route ('SuppliersGrid.index')}}" }}">Cancel</a>
</div>

{{ Form::close() }}

@stop