@extends('layouts.app')
@section('links')
	@parent
	<meta name="description" content="{{ $routename }} page">
	<meta name="keywords" content="{{ $routename }}">
@endsection
@section('content')
<div id="{{ $routename }}" class="flex px-5 py-5 page">
	<div class="inline-block w-2/3 m-auto text-center page-container">
		@if(Lang::has("page.$routename.title", 'en'))
			<h1 class="mb-2 text-2xl">{{ trans_choice("page.$routename.title", 2) }}</h1>
			<p class="mb-2">@lang("page.$routename.intro", ['name'=>'marijn'])</p>
		@else
			<h1 class="mb-2 text-2xl">No language files created yet for this page</h1>
			<p class="mb-2">please create language file: @lang("page.$routename.title")</p>
		@endif
	</div>
</div>
@endsection
@section('scripts')
@endsection
