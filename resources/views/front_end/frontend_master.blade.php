<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	 <!-- Title -->
	<title>@yield('page_title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	@include('front_end.partial.link')
	@yield('extra-css')
</head>	
<body>
	@yield('content')
	@include('front_end.partial.scripts')
	@stack('scripts')
</body>
</html>
