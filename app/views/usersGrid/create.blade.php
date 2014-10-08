@extends('layouts.default')

@section('title')
    Add New User
@stop

@section('view')
    {{ Form::open(['route' => 'usersGrid.store', 'class' => 'pure-form pure-form-aligned']) }}
        <div class="pure-control-group">
            {{ Form::label('username', 'Username: ') }}
            {{ Form::text('username') }}
            {{ $errors->first('username', '<div class="cav-error">:message</div>') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('first_name', 'First name:') }}
            {{ Form::text('first_name') }}
            {{ $errors->first('first_name', '<div class="cav-error">:message</div>') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('last_name', 'Last name:') }}
            {{ Form::text('last_name') }}
            {{ $errors->first('last_name', '<div class="cav-error">:message</div>') }}
        </div>
        <div class="pure-control-group">    
            {{ Form::label('user_type', 'User Type:') }}
            {{ Form::select('user_type', UserType::lists('description', 'id')) }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password') }}
            {{ $errors->first('password', '<div class="cav-error">:message</div>') }}
        </div>
        <div class="pure-control-group">
            {{ Form::label('password_confirmation', 'Re-type password:') }}
            {{ Form::password('password_confirmation') }}
            {{ $errors->first('password_confirmation', '<div class="cav-error">:message</div>') }}
        </div>
        <div class="pure-controls">
            {{ Form::submit('Save', ['class' => 'pure-button pure-button-primary']) }}
        </div>
    {{ Form::close() }}
@stop