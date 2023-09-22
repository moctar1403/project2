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
	@include('layouts.partials._footer')
</body>
</html>