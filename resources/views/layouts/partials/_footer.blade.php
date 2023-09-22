<footer>
		<p class="text-gray-400" >
			&copy; Copyright {{date('Y') }}
			@if(!Route::is('home'))
			<p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
			@endif
			@if ( ! Route::is('about')  )
			<u>
				&middot; <a href="{{ route('about') }}" class="text-indigo-200 hover:text-indigo-800">About </a>
			</u>
			@endif
			@if ( ! Route::is('help')  )
			<u>
				&middot; <a href="{{ route('help') }}" class="text-indigo-200 hover:text-indigo-800">Help </a>
			</u>
				
			@endif
		</p>
	</footer>