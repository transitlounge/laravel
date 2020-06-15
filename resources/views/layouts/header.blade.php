{{-- LEFT HEADER SECTION --}}
<div id="header-section-left" class="flex items-center justify-start w-1/3">
		<a href="/" class="pl-3 pr-1 icon" title="click here to go home">
			@include('icons.home')
		</a>
</div>
{{-- MIDDLE HEADER SECTION --}}
<div id="header-section-middle"  class="flex justify-center w-1/3">
	<a href="/" class="flex items-center text-2xl font-bold" title="click here to go home">@lang("page.home.title")</a>
</div>
{{-- RIGHT HEADER SECTION --}}
<div id="header-section-right" class="flex items-center justify-end w-1/3">
	@auth
		<main-menu align="right" width="120px">
			<template v-slot:trigger-button>
				<button class="pr-3 focus:outline-none" v-pre>
					@include('icons.user')
				</button>
			</template>
			<template v-slot:menu-links>
				<ul class="my-3 text-lg no-underline text-accent">
					{{-- Profile link  --}}
					<li class="pl-5 cursor-pointer hover:bg-blue-700">
						<a href="{{ route('profile') }}" class="text-sm uppercase">Profile</a>
					</li>
					<li class="pl-5 cursor-pointer hover:bg-blue-700">
						<a href="{{ route('cards') }}" class="text-sm uppercase">View Cards</a>
					</li>
					{{-- Logout link  --}}
					<li class="pl-5 cursor-pointer hover:bg-blue-700">
						<button class="pr-2 text-sm uppercase focus:outline-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							{{ __('auth.logout') }}
						</button>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
					</li>
				</ul>
			</template>
		</main-menu>
	@else
		<div class="pr-3 login">
			<a href="{{ route('login') }}" title="click here to {{ __('auth.login') }}">
				@include('icons.user')
			</a>
		</div>
	@endauth
</div>

