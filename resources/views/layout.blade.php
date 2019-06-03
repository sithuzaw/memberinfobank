<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- BOOTSTRAP 3 VERSION -->
	<!-- using Precompile Bootstrap file
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{!!asset('css/bootstrap.min.css')!!}"> -->

	<!-- Latest compiled and minified CSS 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	Optional theme
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">-->

	<!-- BOOTSTRAP 4 VERSION -->
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link rel="stylesheet" href="css/indexStyle.css">
</head>
<body>
	<div class="container">
		@yield('content')		
	</div>

	<!-- BOOTSTRAP 3 VERSION -->
	<!-- using Precompile Script file 
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script> 
	<script type="text/javascript" src="{!!asset('js/jquery-4.3.1.min.js')!!}"></script>
	<script type="text/javascript" src="{!!asset('js/bootstrap/min.js')!!}"></script> -->

	<!--script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	Latest compiled and minified JavaScript 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

	<!-- BOOTSTRAP 4 VERSION -->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>