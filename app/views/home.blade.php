@extends('layouts.base')

@section('head')
{{-- This is a pretty, and secret Blade Comment --}}
	@parent
	<link href='another.css' rel='stylesheet' />
@stop

@section('body')
	<h1>Hurray!</h1>
	<p>We have a template!</p>
@stop

{{ route('calendar') }}
