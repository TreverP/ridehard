<!DOCTYPE html>
<html>
<head>
	<title> {{ $title }} </title>
	{{ HTML::style('/styles/css/bootstrap.css') }}
	{{ HTML::style('/styles/css/custom.css') }}
</head>

<body>
	<div class="wrapper">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<a href="/" class="brand">Ride Hard Rentals</a>
				<ul class="nav">
					<li>Home</li>
					<li>Rentals</li>
					<li>Comments</li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
	</div>	

	@yield('content')
</body>

</html>