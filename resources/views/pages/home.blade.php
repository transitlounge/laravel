@extends('layouts.app')
@section('links')
	@parent
	<meta name="description" content="where meaning connects to purpose, and where chaos fuels freedom, innovation and collaboration.">
	<meta name="keywords" content="transitlounge, connect, purpose, freedom, chaos, collaboration, innovation">
@endsection
@section('content')
	<div class="page text-center flex flex-col items-center">
		<h1 class="noselect font-sans2 text-center text-bigview tracking-compact font-semibold leading-tight subpixel-antialiased text-default">@lang("page.home.title")</h1>
		@guest
			<div id="guest-links" class="mt-2 text-mediumview ">
				<a href="{{ route('register') }}" class="font-bold mb-2 uppercase border px-3 py-2 rounded bg-button">{{ trans_choice('auth.register', 1) }}</a>
				<a href="{{ route('about') }}" class="font-bold mb-2 uppercase border px-3 py-2 rounded bg-button">{{ trans_choice('page.about.title', 1) }}</a>
				<a href="{{ route('contact') }}" class="font-bold mb-2 uppercase border px-3 py-2 rounded bg-button">@lang("page.contact.title")</a>
			</div>
		@else
			<h2>@lang("page.home.welcome")</h2>
		@endguest

		{{-- @include('components.article', ['title'=>'test','body'=>'This is an article component'])
		@include('components.article', ['title'=>'test 2','body'=>'This is an article component too']) --}}
	</div>
@endsection
@section('scripts')
@endsection
