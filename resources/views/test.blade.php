<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	{!! Html::script('//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js') !!}
	{!! Html::style('//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css') !!}
	{!! Html::style('//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css') !!}
</head>
<body>

<h1>RFID Information</h1>

<form action='verify' method="POST">
	<label>
	</label>
	<label>
		passowrd: 
		<input type="password" name="pass">
	</label>
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<input type="submit">
</form>

{!!Form::open(array('url'=>'verify','method'=>'GET'))!!}
	{!!Form::text('username',null,array('placeholder'=>'Hiiii....')) !!}
	{!!Form::submit('Submit me',array('class','button btn-primary')) !!}
	<label>
		passowrd: 
		<input type="password" name="pass">
	</label>
{!! Form::close()!!}

{!! DB::Connection()->getDatabaseName() !!} 



{!! Form::open(array('url' => 'store','method'=>'post')) !!}
		<p>
			{!! Form::label('username') !!}
			{!! Form::text('username') !!}
		</p>
		<p>
			{!! Form::label('password') !!}
			{!! Form::password('password') !!}
		</p>
		<p>
			{!! Form::label('Repeat Password') !!}
			{!! Form::password('password-repeat') !!}
		</p>
		<p>
			{!! Form::submit() !!}
		</p>
	{!! Form::close() !!}

<?php dd($errors) ?>


</body>
</html>