{{-- LEFT SECTION --}}
<div id="header-section-left" class="flex justify-start items-center w-1/3">
    {{-- <i class="icon pl-3 pr-1">@include('icons.menu')</i> --}}
</div>
{{-- MIDDLE BRAND SECTION --}}
<div id="header-section-middle"  class="flex justify-center w-1/3">
	<a href="/" class="flex items-center">@include('icons.logo')</a>
</div>
{{-- RIGHT SECTION --}}
<div id="header-section-right" class="flex justify-end items-center w-1/3">
	@if(Route::has('login'))
		@auth
			<div class="logout pr-3">
					<a  href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();"
							class="no-underline hover:underline text-sm uppercase">
							{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			</div>
			{{-- <button class="flex text-default no-underline focus:outline-none" v-pre>
				<i class="icon pl-1 pr-3">@include('icons.user')</i>
			</button> --}}
		@else
			<div class="login pr-3">
				<a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal uppercase">{{ __('Login') }}</a>
			</div>
		@endauth
	@endif
</div>

