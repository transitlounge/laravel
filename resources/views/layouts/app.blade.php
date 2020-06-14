<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="m4rinos">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Transitlounge') }} @yield('title', '| Empty title')</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	@stack('scripts')
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@section('links')
	@show
</head>
<body class="theme-light text-default h-full w-full">
	<div id="app" class="flex h-screen flex-col z-0 font-sans2 z-0 bg-page">
		<header id="header" class="flex h-10 z-10 mb-3">
			@include('layouts.header')
		</header>
		<main role="main" class="flex-col flex-1 relative z-0">
			@include('components.status')
			@yield('content')
		</main>
		<footer class="flex flex-col text-center text-sm bg-menu text-inverse">
			@include('layouts.footer')
		</footer>
	</div>
	@yield('scripts')
</body>
</html>
