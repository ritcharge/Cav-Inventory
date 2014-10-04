@import('layouts.default')

@section('title')
    Change Password
@stop

@section('view')
    <div><h2>Change Password</h2></div>
    <div>
        {{ Form::open(['userProfile.update', 'class' => 'pure-form pure-form-stacked']) }}
            
        {{ Form::password('old_password'), ['placeholder' => 'Current Password'] }}
        {{ Form::password('new_password'), ['placeholder' => 'New Password'] }}
        {{ Form::password('re_password'), ['placeholder' => 'Retype New Password'] }}
        
        {{ Form::close() }}
    </div>
@stop