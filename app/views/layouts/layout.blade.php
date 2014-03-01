<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>Games Collection</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' />
</head>
<body>
	<div class='container'>
	    <nav role='navigation' class='navbar navbar-default'>
	        <div class='navbar-header'>
				<a href="{{ action('games.index') }}" class="navbar-brand"></a>
			</div>
	    </nav>
		@yield('content')
	</div>
</body>
</html>
