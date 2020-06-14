<nav role="navigation" class="flex justify-around p-5 uppercase">
	{{-- <a class="" href="{{ route('contact') }}">Partners</a> --}}
	@guest
		<a class="" href="{{ route('register') }}">{{ trans_choice('auth.register', 2) }}</a>
	@else
		<a class="" href="{{ route('network') }}">@lang("page.network.title")</a>
	@endguest
	<a class="" href="{{ route('about') }}">{{ trans_choice('page.about.title', 2) }}</a>
	<a class="" href="{{ route('contact') }}">@lang("page.contact.title")</a>
</nav>
<span class="p-1 text-xs bg-black">
@php
$year = date("Y");
	echo "Copyright &copy; ".$year." ".config('app.name', 'Transitlounge').' Pte Ltd. All Rights Reserved';
@endphp
</span>
