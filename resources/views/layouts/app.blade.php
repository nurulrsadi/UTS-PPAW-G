<!DOCTYPE HTML>
<html>
	<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<title img src="/images/logoajh.png" alt="">M&N's Studio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
    <body>
        @include('part.index')
        @yield('content')
        @include('part.footer')
    </body>
</html>