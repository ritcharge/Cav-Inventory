<!--
Template for ever page
-->
<!DOCTYPE html>
<html>
    <head>
        <title>
            @yield('title')
        </title>
        <!--STYLESHEETS-->
        <!--Using stylesheets in Public folder-->
        {{ HTML::style('css/cav/cav-style-general.css'); }} <!--Custom Styles That I Made-->
        {{ HTML::style('css/pure-release-0.5.0/pure-min.css'); }}
        <!--[if lte IE 8]>
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-old-ie-min.css'); }}
            {{ HTML::style('css/layouts/side-menu-old-ie.cs') }}
        <![endif]-->
        <!--[if gt IE 8]><!-->
            {{ HTML::style('css/pure-release-0.5.0/grids-responsive-min.css'); }}
            {{ HTML::style('css/layouts/side-menu.css') }}
        <!--<![endif]-->
        {{ HTML::script('js/ui.js') }}
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    
		<div id="layout">
			<!-- Menu toggle -->
			<a href="#menu" id="menuLink" class="menu-link">
				<!-- Hamburger icon -->
				<span></span>
			</a>

			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<a class="pure-menu-heading" href="#"><h3>{{ Auth::user()->user }}</h3></a>
					<ul>
						<li><a href="#" tabindex="1"><b>Inventory</b></a></li> <!--"By giving it a tabindex you can make any element you like focusable. 
						The focus and blur events should work on such elements." Works in all browsers: -->
						<li><a href="#" tabindex="2"><b>Purchase Orders</b></a></li>
						<li><a href="#" tabindex="3"><b>Supplier</b></a></li>
						<li><a href="#" tabindex="4"><b>Account Settings</b></a></li>
					</ul>
				</div>
			</div>

			<div id="main">
			<!--	<div class="header" style="padding-top: 1em">
					<img src="Cavitech.png"/>
				</div>
				
				<div class="content" style="color: #1A1A1A; font-size: 12px">
					<img src="homepicture.png"/>
					<h2 class="content-subhead" >Contact us:</h2>
					<p>Tel. nos:(046) 512-12-21 / (046) 512-11-85 / (02) 925-30-33</br>
					Telefax: (046) 450-5947</br>
					Address: Block 3A Lot 4, Westridge Residence, Diamond Street, Salawag Dasmariñas, Cavite City </p>
				</div> -->
			</div>
		</div>

    </body>
</html>