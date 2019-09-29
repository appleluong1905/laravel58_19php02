<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'My page')</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	@yield('css')
</head>
<body>
	<h1>My website</h1>
	@yield('content')
	<h2>Footer</h2>
	@yield('footer1')
	@yield('script_name')
</body>
</html>