<!--
The login form that the user will see when he/she goes to the main page.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Cavitech Inventory System</title>
        
        {{ HTML::style('css/cav/cav-style-general.css'); }}
        {{ HTML::style('css/pure-release-0.5.0/pure-min.css'); // Using stylesheet in Public folder }}
        <!--[if lte IE 8]>
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-old-ie-min.css'); }}
        <![endif]-->
        <!--[if gt IE 8]><!-->
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-min.css'); }}
        <!--<![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="cav-margin-auto cav-width-16">
            <div class="cav-padded-1">
                {{ Form::open(['route' => 'sessions.store', 'class' => 'pure-form pure-form-stacked']) }}
                
                    <fieldset class="pure-group">
                        {{ Form::text('username', '', ['placeholder' => 'Username', 'class' => 'pure-input-1']) }}
            
                        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'pure-input-1']) }}
                    </fieldset>
                
                    {{ Form::submit('Login', ['class' => 'pure-button pure-button-primary pure-input-1']) }}
                
                {{ Form::close() }}
            </div>
        </div>
    </body>
</html>