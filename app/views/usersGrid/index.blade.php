@extends('layouts.grid')

@section('title')
    Users
@stop

@section('toolbar')
        <a class='pure-button pure-button-primary' style = 'text-decoration: none' href="{{ route('usersGrid.create') }}">Add User</a>
        <a type='button' style = 'text-decoration: none' class='pure-button' data-toggle='modal' data-target='#delete'>Delete User</a>
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.js"></script>   <!-- modal-content -->
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
                <a class="pure-button" style = 'text-decoration: none' href="{{ route('usersGrid.edit', $user->id) }}">Edit</a>
            </td>
        </tr>
    @endforeach
    {{ Form::close() }}
@stop

        <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <!-- close button --> 
                        <h4 class="modal-title">Delete </h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this user/s?</p>
                    </div>
                    <div class="modal-footer">
                        {{ Form::open(['route' => ['usersGrid.destroy', 'delete'], 'method' => 'DELETE']) }}
                        {{ Form::submit('Yes', ['class' => 'btn btn-primary']) }}<!-- Button for Delete -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>  <!-- Button for Cancel -->
                    </div>
                </div>
            </div>
        </div>