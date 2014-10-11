@extends('layouts.default')

@section('title')
    Add New User
@stop

@section('view')
    {{ Form::open(['route' => ['brandsGrid.update', $brandsGrid], 'method' => 'PATCH', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
        <div><h2>Edit Brand Name</h2></div>
        <div class="pure-control-group">
            {{ Form::label('name', 'Brand Name: ') }}
            {{ Form::text('name', Brand::find($brandsGrid)->name) }}
        </div>
      
        <div class="pure-controls">
            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
        </div>
    {{ Form::close() }}
@stop