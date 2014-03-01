@extends('layouts.layout')

@section('content')
	<div class='page-header'>
	    <h1>Delete {{ $game->title }} <small>Are you sure?</small></h1>
	</div>

	{{ Form::open(['route' => [ 'games.destroy', $game->id], 'method' => 'DELETE']) }}
		{{ Form::submit('Yes',  ['class' => 'btn btn-primary']) }}
		<a href="{{ action('games.index') }}" class="btn btn-link">No Way!</a>
	{{ Form::close() }}
@stop
