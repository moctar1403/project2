@extends('app')

@section('title','| About  '. config('app.name'))
@section('content')
<img src="images/it.png" alt="IT Logo" class="rounded-full shadow-md my-12">
<h2 class="mb-5 text-gray-700"> Built with <span class="text-pink-500">&hearts;</span>  Moctar AbdDaim</h2>
<p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@stop