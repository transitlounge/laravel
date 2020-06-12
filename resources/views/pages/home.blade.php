@extends('layouts.app')
@section('links')
	@parent
	<meta name="description" content="where meaning connects to purpose, and where chaos fuels freedom, innovation and collaboration.">
	<meta name="keywords" content="transitlounge, connect, purpose, freedom, chaos, collaboration, innovation">
@endsection
@section('content')
	<div class="page text-center flex flex-col items-center">
		@include('components.jumbo', ['content' => config('app.name', 'Transitlounge')] )
		@guest
			@if (Route::has('register'))
				<a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal uppercase">{{ __('auth.register') }}</a>
			@endif
		@else
			<h2>@lang("page.home.welcome")</h2>
		@endguest
	</div>
@endsection
@section('scripts')
@endsection
