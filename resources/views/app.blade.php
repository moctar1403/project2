<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>@yield('title',config('app.name'))</title>
</head>
<body class="py-6 flex flex-col juftify-between items-center min-h-screen">
	<main role="main" class="flex flex-col juftify-center items-center">
		@yield('content')
	</main>
	<footer>
		<p class="text-gray-400" >
			&copy; Copyright {{date('Y') }}
			@if ( ! Route::is('about')  )
			<u>
				&middot; <a href="{{ route('about') }}" class="text-indigo-200 hover:text-indigo-800">About </a>
			</u>
				
			@endif
		</p>
	</footer>
</body>
</html>