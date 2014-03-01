@extends('layouts.layout')

@section('content')
	<div class='page-header'>
	    <h1>Edit Game <small>Go on, mark it complete!</small></h1>
	</div>

	{{ Form::open(['route' => ['games.update', $game->id], 'method' => 'PUT']) }}
		<div class="form-group {{ ($errors->first('title')) ? 'has-error' : '' }}">
			@if ($errors->first('title'))
				{{ Form::label($errors->first('title'), $values=null, ['class' => 'control-label']) }}
			@else
				{{ Form::label('Title') }}
			@endif
			{{ Form::text('title', $game->title, ['class' => 'form-control']) }}
		</div>
		<div class="form-group {{ ($errors->first('publisher')) ? 'has-error' : '' }}">
			@if ($errors->first('publisher'))
				{{ Form::label($errors->first('publisher'), $values=null, ['class' => 'control-label']) }}
			@else
				{{ Form::label('Publisher') }}
			@endif
			{{ Form::text('publisher', $game->publisher, ['class' =>'form-control']) }}
		</div>
		<div class='checkbox'>
			{{ Form::label('Complete?') }}
			<input type='checkbox' name='complete' {{ $game->complete ? 'checked' : '' }}/>
		</div>
		{{ Form::submit('Save',  ['class' => 'btn btn-primary']) }}
		<a href="{{ action('games.index') }}" class="btn btn-link">Cancel</a>
	{{ Form::close() }}
@stop
