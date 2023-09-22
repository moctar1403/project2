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