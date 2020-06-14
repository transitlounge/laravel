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
		<main-menu align="right" width="100px">
			<template v-slot:trigger-button>
				<button class="focus:outline-none pr-3" v-pre>
					@include('icons.user')
				</button>
			</template>
			<template v-slot:menu-links>
				<ul class="text-accent no-underline text-lg my-3">
					<li class="hover:bg-blue-700 pl-5 cursor-pointer">
						<a href="{{ route('profile') }}" class="text-sm uppercase">Profile</a>
					</li>
					<li class="hover:bg-blue-700 pl-5 cursor-pointer">
						<button class="text-sm uppercase pr-2 focus:outline-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							{{ __('auth.logout') }}
						</button>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
					</li>
				</ul>
			</template>
		</main-menu>
	@else
		<div class="login pr-3">
			<a href="{{ route('login') }}" title="click here to {{ __('auth.login') }}">
				@include('icons.user')
			</a>
		</div>
	@endauth
</div>

