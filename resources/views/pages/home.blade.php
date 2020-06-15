@extends('layouts.app')
@section('links')
	@parent
	<meta name="description" content="where meaning connects to purpose, and where chaos fuels freedom, innovation and collaboration.">
	<meta name="keywords" content="transitlounge, connect, purpose, freedom, chaos, collaboration, innovation">
@endsection
@section('title', 'Home')
@section('content')
	<div class="flex flex-col items-center text-center page">
		<div class="flex m-auto row justify-content-center">
			@include('icons.yin')
			@include('icons.taiji')
			@include('icons.yang')
		</div>
	</div>
@endsection
@section('scripts')
@endsection
