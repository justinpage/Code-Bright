<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>Create User</title>
</head>
<body>
	{{ Form::open(['url' => 'login']) }}
		<p>{{ Form::label('Username:') }}</p>
		<p>{{ Form::text('username', $value=null,['placeholder' => 'Username:']) }}</p>
		<p>{{ Form::label('password') }}</p>
		<p>{{ Form::password('password', $value=null,['placeholder' => 'Password:']) }}</p>
		<p>{{ Form::submit('Login') }}</p>
		<p>
			{{ Form::checkbox('remember') }}
			{{ Form::label('Remember me.') }}
		</p>
	{{ Form::close() }}
</body>
</html>
