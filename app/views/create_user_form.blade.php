<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8' />
	<title>Create User</title>
</head>
<body>
	{{ Form::open(['url' => '/user']) }}
		<p>{{ Form::label('Username:') }}</p>
		<p>{{ Form::text('username', $value=null,['placeholder' => 'Username:']) }}</p>
		<p>{{ Form::label('email') }}</p>
		<p>{{ Form::email('email', $value=null,['placeholder' => 'Email:']) }}</p>
		<p>{{ Form::label('password') }}</p>
		<p>{{ Form::password('password', $value=null,['placeholder' => 'Password:']) }}</p>
		<p>{{ Form::submit('Create') }}</p>
	{{ Form::close() }}
</body>
</html>
