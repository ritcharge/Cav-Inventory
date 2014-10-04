<!--
SHOW USER PROFILE
SHOW BUTTON TO CHANGE PASSWORD
-->
@extends('layouts.default')

@section('title')
    Welcome, {{ $username }}!
@stop

@section('view')
    <div><h2>Welcome back, {{ Auth::user()->first_name }}</h2></div>
    <div><a class="pure-button" href="{{ route('userProfile.edit', Auth::user()->username) }}">Change Password</a></div>
@stop