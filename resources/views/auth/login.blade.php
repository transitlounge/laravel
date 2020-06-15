@extends('layouts.app')

@section('content')
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-center">
			<div class="w-full max-w-sm">
				<div class="flex flex-col break-words border border-2 rounded shadow-md bg-card">
					<div class="px-6 py-3 mb-0 font-semibold text-gray-700 bg-header">{{ __('auth.login') }}</div>
					<form class="w-full p-6" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="flex flex-wrap mb-6">
							<label for="email" class="block mb-2 text-sm font-bold text-gray-700">{{ __('auth.email') }}:</label>
							<input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
								<p class="mt-4 text-xs italic text-red-500">{{ $message }}</p>
							@enderror
						</div>
						<div class="flex flex-wrap mb-6">
							<label for="password" class="block mb-2 text-sm font-bold text-gray-700">
									{{ __('Password') }}:
							</label>
							<input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required>
							@error('password')
								<p class="mt-4 text-xs italic text-red-500">{{ $message }}</p>
							@enderror
						</div>
						<div class="flex mb-6">
							<label class="inline-flex items-center text-sm text-gray-700" for="remember">
									<input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }}>
									<span class="ml-2">{{ __('auth.remember') }}</span>
							</label>
						</div>
						<div class="flex flex-wrap items-center">
							<button type="submit" class="px-4 py-2 font-bold text-gray-100 bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
									{{ __('auth.login') }}
							</button>
							@if (Route::has('password.request'))
									<a class="ml-auto text-sm text-blue-500 no-underline whitespace-no-wrap hover:text-blue-700" href="{{ route('password.request') }}">
											{{ __('auth.forgot') }}
									</a>
							@endif
							@if (Route::has('register'))
								<p class="w-full mt-8 -mb-4 text-xs text-center text-gray-700">
									{{ __("auth.no-account") }}
									<a class="text-blue-500 no-underline hover:text-blue-700" href="{{ route('register') }}">
											{{ __('auth.register') }}
									</a>
								</p>
							@endif
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
