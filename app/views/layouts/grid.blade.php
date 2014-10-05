@extends('layouts.default')

@section('view')
    <div class="pure-g">
        <div class="pure-u-4-5 cav-toolbar-left-1">
            @yield('toolbar')
        </div>
        <div class="pure-u-1-5 cav-toolbar-right-1"></div>
    </div>
    <div class="pure-g">
        <div class="pure-u-1-1">
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
        </div>
    </div>
@stop