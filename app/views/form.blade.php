<h1>Registration form for Phill's Parks</h1>
{{ Form::open(array('url' => 'registration' ))  }}

	{{-- Username field --}}
	{{ $errors->first('username', '<span class="error">:message</span>') }}
	{{ Form::label('username', 'Username') }}
	{{ Form::text('username') }}
	
	{{-- Email address field --}}
	{{ $errors->first('email', '<span class="error">:message</span>') }}
	{{ Form::label('email', 'Email address') }}
	{{ Form::email('email') }}

	{{-- Password field --}}
	{{ $errors->first('password', '<span class="error">:message</span>') }}
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password') }}

	{{-- Password confirmation field --}}
	{{ Form::label('password_confirmation', 'Password confirmation') }}
	{{ Form::password('password_confirmation') }}

	{{-- Form submit button --}}
	{{ Form::submit('Register'); }}
{{ Form::close() }}
