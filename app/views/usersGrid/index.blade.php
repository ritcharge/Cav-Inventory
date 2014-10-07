@extends('layouts.grid')

@section('title')
    Users
@stop

@section('toolbar')
    {{ Form::open(['route' => ['usersGrid.destroy', 'delete'], 'method' => 'DELETE']) }}
        <a class="pure-button pure-button-primary" href="{{ route('usersGrid.create') }}">Add User</a>
        {{ Form::submit('Delete', ['class' => 'pure-button']) }}
@stop

@section('table-headers')
    <th></th>
    <th>Username</th>
    <th>Name</th>
    <th>Type</th>
    <th>Action</th>
@stop

@section('table-contents')
    @foreach(User::all() as $user)
        <tr>
            <td>
                <!--TEMPORARY. REPLACE WITH PROPER CHECKBOX THRU FORMBUILDER-->
                <!--<input type="checkbox" class="pure-checkbox"/>-->
                {{ Form::checkbox('for_delete[]', $user->id, false, ['class' => 'pure-checkbox']) }}
            </td>
            <td>
                {{ $user->username }}
            </td>
            <td>
                {{ "$user->first_name $user->last_name" }}
            </td>
            <td>
                {{ $user->userType['description'] }}
            </td>
            <td>
                <a class="pure-button" href="{{ route('usersGrid.edit', $user->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
    {{ Form::close() }}
@stop