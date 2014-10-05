@extends('layouts.default')

@section('title')
    Add New User
@stop

@section('view')
    {{ Form::open(['route' => 'usersGrid.create', 'class' => 'pure-form pure-form-aligned cav-form-stacked-1']) }}
        <div class="pure-control-group">
            {{ Form::label('username', 'Username: ') }}
            {{ Form::text('username') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('first_name', 'First name:') }}
            {{ Form::text('first_name') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('last_name', 'Last name:') }}
            {{ Form::text('last_name') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('user_type', 'User Type:') }}
            {{ Form::select('user_type', UserType::lists('description', 'id')) }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('password_confirmation', 'Re-type password:') }}
            {{ Form::password('password_confirmation') }}
        </div>
        <div class="pure-controls">
            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
        </div>
    {{ Form::close() }}
@stop