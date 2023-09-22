@extends('layouts.app')

@section('content')
		<img src="images/zf.png" alt="ZF Logo" class="rounded shadow-md h-32 nt-12">
		<h1 class="nt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Nouadhibou</h1>
		<p class="text-lg text-red-800">It's currently {{ date('h:i A') }}</p>
@stop