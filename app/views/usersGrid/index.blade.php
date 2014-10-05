@extends('layouts.grid')

@section('title')
    Users
@stop

@section('toolbar')
    <a class="pure-button pure-button-primary" href="{{ route('usersGrid.create') }}">Add User</a>
@stop

@section('table-headers')
    <th></th>
    <th>Username</th>
    <th>Name</th>
    <th>Action</th>
@stop

@section('table-contents')
    @foreach(User::all() as $user)
        <tr>
            <td>
                <!--TEMPORARY. REPLACE WITH PROPER CHECKBOX THRU FORMBUILDER-->
                <input type="checkbox" class="pure-checkbox"/>
            </td>
            <td>
                {{ $user->username }}
            </td>
            <td>
                {{ "$user->first_name $user->last_name" }}
            </td>
            <td>
                <a class="pure-button">Edit</a>
            </td>
        </tr>
    @endforeach
@stop