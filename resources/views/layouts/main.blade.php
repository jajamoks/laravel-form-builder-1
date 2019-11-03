<!DOCTYPE html>
<html lang="en">
	<head>
		<title>{{ config('app.name') }} | {{ $title }}</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		@stack('styles')
	</head>
	<body>
		@include('layouts.nav')

		<div class="container mt-5">
			@yield('content')
		</div>

		<section class="copyright p-2 text-center text-white bg-dark">
			<div class="container">
				<small>Footer</small>
			</div>
		</section>

		@stack('scripts')

	</body>
</html>
