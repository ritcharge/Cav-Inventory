@extends('layouts.default')

@section('view')
    <div class="cav-toolbar-left-1">
        <a class="pure-button pure-button-primary">@yield('add-button-text')</a>
        
    </div>
    <table class="pure-table pure-table-striped cav-width-1-1">
        <thead>
            <tr>
                @yield('table-headers')
            </tr>
        </thead>
        <tbody>
            @yield('table-contents')
        </tbody>
    </table>
@stop