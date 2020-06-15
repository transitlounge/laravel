@extends('layouts.app')
@section('title')
	@lang("cards.general.name")
@endsection
@section('links')
	@parent
	<meta name="description" content="@lang("cards.$card->name.name")">
	<meta name="keywords" content="card, qcard, @lang("cards.$card->name.name")">
@endsection
@section('content')
<div id="card-detail" class="relative flex flex-col page">
	<h1 class="mb-2 text-3xl text-center rounded-t-md">@lang("cards.$card->name.name")</h1>
	<div class="relative m-auto cursor-pointer card-container" style="width: 337px; height: 553px;">
		<div class="absolute top-0 bottom-0 left-0 right-0 m-auto transition duration-300 ease-in card preserve-3d active:rotateY-180">
			<div class="absolute w-full h-full front backface-hidden ">
				<img src="{{ asset($card->path) }}" alt="@lang("cards.$card->name.name")" class="rounded-md">
			</div>
			<div class="absolute w-full h-full back backface-hidden rotateY-180">
				<img src="{{ asset('images/cards/dragonfly.jpg') }}" alt="dragonfly" class="rounded-md">
			</div>
		</div>
	</div>
	<p class="max-w-sm pl-5 m-auto mt-3 text-left">@lang("cards.$card->name.description")</p>
</div>
@endsection

