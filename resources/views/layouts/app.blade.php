<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="m4rinos">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@lang("page.home.title") @yield('title', '| Empty title')</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	@stack('scripts')
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@section('links')
	@show
</head>
<body class="w-full h-full theme-light text-default">
	<div id="app" class="z-0 flex flex-col h-screen font-sans2 bg-page">
		<header id="header" class="z-10 flex h-10 mb-3">
			@include('layouts.header')
		</header>
		<main role="main" class="relative z-0 flex-col flex-1">
			@include('components.status')
			@yield('content')
		</main>
		<footer class="flex flex-col text-sm text-center bg-menu text-inverse">

		</footer>
	</div>
	@yield('scripts')
</body>
</html>
