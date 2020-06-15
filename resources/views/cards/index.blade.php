@extends('layouts.app')
@section('title'){{  trim(@lang("cards.general.name")@endsection
@section('links')
	@parent
	<meta name="description" content="@lang("cards.general.name")">
	<meta name="keywords" content="cards, qcards, collection, grid">
@endsection
@section('content')
<div id="cards" class="px-5 py-5 text-center page">
	<h1 class="mb-2 text-2xl">@lang("cards.general.name")</h1>
	<div class="grid gap-2 card-container sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
		@foreach($cards as $card)
		<a href="{{ route('card.show', $card->name) }}" class="">
			<img src="{{ asset($card->path) }}" alt="" class="rounded outline-none hover:shadow-outline">
		</a>
		@endforeach
	</div>
</div>
@endsection
