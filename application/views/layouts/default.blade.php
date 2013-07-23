<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
</head>
<body>
	@if(Session::has('message'))
		<p style="color: green; text-align: center;">{{ Session::get('message') }}</p>
	@endif

	@yield('content')
</body>
</html>