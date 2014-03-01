@extends('layouts.layout')

@section('content')
	<div class='page-header'>
	    <h1>Create Game <small>and someday finish it!</small></h1>
	</div>

	{{ Form::open(['route' => 'games.store']) }}
		<div class="form-group {{ ($errors->first('title')) ? 'has-error' : '' }}">
			@if ($errors->first('title'))
				{{ Form::label($errors->first('title'), $values=null, ['class' => 'control-label']) }}
			@else
				{{ Form::label('Title') }}
			@endif
			{{ Form::text('title', $value=null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group {{ ($errors->first('publisher')) ? 'has-error' : '' }}">
			@if ($errors->first('publisher'))
				{{ Form::label($errors->first('publisher'), $values=null, ['class' => 'control-label']) }}
			@else
				{{ Form::label('Publisher') }}
			@endif
			{{ Form::text('publisher', $value = null, ['class' =>'form-control']) }}
		</div>
		<div class='checkbox'>
			{{ Form::label('Complete') }}
			{{ Form::checkbox('complete') }} Complete?
		</div>
		{{ Form::submit('Create',  ['class' => 'btn btn-primary']) }}
		<a href="{{ action('games.index') }}" class="btn btn-link">Cancel</a>
	{{ Form::close() }}
@stop
