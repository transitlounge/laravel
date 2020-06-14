{{-- LEFT SECTION --}}
<div id="header-section-left" class="flex justify-start items-center w-1/3">
		<a href="/" class="icon pl-3 pr-1" title="click here to go home">
			@include('icons.home')
		</a>
</div>
{{-- MIDDLE BRAND SECTION --}}
<div id="header-section-middle"  class="flex justify-center w-1/3">
	<a href="/" class="flex items-center" title="click here to go home">@include('icons.logo')</a>
</div>
{{-- RIGHT SECTION --}}
<div id="header-section-right" class="flex justify-end items-center w-1/3">
		@auth
			{{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
				 class="no-underline hover:underline text-sm uppercase pr-2">{{ __('auth.logout') }}</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			<a href="{{ route('about') }}" class="pr-3" title="click here to {{ __('auth.login') }}">
				@include('icons.user')
			</a> --}}
			{{-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
				 class="no-underline hover:underline text-sm uppercase pr-2">{{ __('auth.logout') }}</a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form> --}}
			<button class="pr-3" title="click here to {{ __('auth.login') }}">
				@include('icons.user')
			</button>
			<nav class="menu">
				<ul>
					<li>test</li>
					<li>test</li>
				</ul>
			</nav>
		@else
			<div class="login pr-3">
				<a href="{{ route('login') }}" title="click here to {{ __('auth.login') }}">
					@include('icons.user')
				</a>
			</div>
		@endauth
</div>

