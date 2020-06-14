@extends('layouts.app')
@section('links')
	@parent
	<meta name="description" content="{{ $routename }} page">
	<meta name="keywords" content="{{ $routename }}">
@endsection
@section('content')
<div id="{{ $routename }}" class="page py-5 px-5 flex">
	<div class="page-container text-center inline-block m-auto w-2/3">
		@if(Lang::has("page.$routename.title", 'en'))
			<h1 class="text-2xl mb-2">{{ trans_choice("page.$routename.title", 2) }}</h1>
			<p class="mb-2">@lang("page.$routename.intro")</p>
		@else
			<h1 class="text-2xl mb-2">No language files created yet for this page</h1>
			<p class="mb-2">please create language file: @lang("page.$routename.title")</p>
		@endif
	</div>
</div>
@endsection
@section('scripts')
@endsection
