@extends('layouts.grid')

@section('title')
    Add New Brand

@stop

@section('view')
    <div><h2>Add New Brand</h2></div>
    {{ Form::open(['route' => 'brandsGrid.store', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
        <div class="pure-control-group">
            {{ Form::label('brand_name', 'Brand Name: ') }}
            {{ Form::text('brand_name')}}
        </div>
        <div class="pure-controls">
            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
            or 
            <a class="pure-button" href="{{ route('brandsGrid.index')}}">Cancel</a>
        </div>

    {{Form::close() }}

@stop
    