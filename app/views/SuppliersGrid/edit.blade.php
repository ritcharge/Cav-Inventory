
<!--///**-->
<!--// * Created by PhpStorm.-->
<!--// * User: LACHICA-->
<!--// * Date: 10/6/14-->
<!--// * Time: 8:51 PM-->
<!--// */-->
@extends('layouts.default')

@section('title')
    Edit Supplier Info
@stop
//
@section('view')
{{ Form::open(['route' => ['SuppliersGrid.update', $SuppliersGrid], 'method' => 'PATCH', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
        <div class="pure-control-group">
            {{ Form::label('company', 'Company Name: ') }}
            {{ Form::text('company', Supplier::find($SuppliersGrid)->company) }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('address', 'Address:') }}
            {{ Form::text('address', Supplier::find($SuppliersGrid)->address) }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('contact', 'Contact No.:') }}
            {{ Form::text('contact', Supplier::find($SuppliersGrid)->contact) }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('contact_person', 'Contact Person:') }}
            {{ Form::text('contact_person', Supplier::find($SuppliersGrid)->contact_person) }}
        </div>

        <div class="pure-controls" style="float:left;width:1px">
            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
        </div>

        <div class="pure-controls" style="float: left; width: 1px">
    <a class="pure-button pure-button-primary" href="{{ route ('SuppliersGrid.index')}}" }}">Cancel</a>
        </div>
    {{ Form::close() }}
@stop