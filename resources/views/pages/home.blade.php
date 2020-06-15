@extends('layouts.app')
@section('links')
	@parent
	<meta name="description" content="where meaning connects to purpose, and where chaos fuels freedom, innovation and collaboration.">
	<meta name="keywords" content="transitlounge, connect, purpose, freedom, chaos, collaboration, innovation">
@endsection
@section('title', 'Home')
@section('content')
	<div class="flex flex-col items-center text-center page">
		<h1 class="subpixel-antialiased font-semibold leading-tight text-center noselect font-sans2 text-bigview tracking-compact text-default">@lang("page.home.title")</h1>
		<div id="guest-links" class="my-3 text-mediumview ">
			<a href="{{ route('register') }}" class="px-3 py-2 mb-2 font-bold uppercase border rounded bg-button">create</a>
			<a href="{{ route('about') }}" class="px-3 py-2 mb-2 font-bold uppercase border rounded bg-button">connect</a>
			<a href="{{ route('contact') }}" class="px-3 py-2 mb-2 font-bold uppercase border rounded bg-button">collaborate</a>
		</div>
		@guest
			<div id="guest-links" class="my-3 text-mediumview ">
				<a href="{{ route('register') }}" class="px-3 py-2 mb-2 font-bold uppercase bg-red-300 border rounded">{{ trans_choice('auth.register', 1) }}</a>
			</div>
		@else
			<h2>@lang("page.home.welcome")</h2>
		@endguest
		@include('components.article', ['title'=>'test','body'=>'This is an article component'])
		@include('components.article', ['title'=>'test 2','body'=>'This is an article component too'])
	</div>
@endsection
@section('scripts')
@endsection
