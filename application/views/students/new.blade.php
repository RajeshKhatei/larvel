@layout('layouts.default')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Add Student</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/student-style.css') }}
</head>
<body>
@section('content')
<div class="wrapper">
	<div class="center_box">

	<div class="header">Add New Student</div>

	{{ render('common.student_errors') }}

	{{ Form::open('students/create', 'POST') }}

	<p>
		<div class="cont">
			<div class="head">{{ Form::label('name', 'Name : ') }}</div>
			<div class="field">{{ Form::text('name', Input::old('name')) }}</div>
		</div>
	</p>
	
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('phone', 'Phone : ') }}</div>
			<div class="field">{{ Form::text('phone', Input::old('phone')) }}</div>
		</div>
	</p>
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('city', 'City : ') }}</div>
			<div class="field">{{ Form::text('city', Input::old('city')) }}</div>
		</div>
	</p>
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('branch', 'Branch : ') }}</div>
			<div class="field">{{ Form::text('branch', Input::old('branch')) }}</div>
		</div>
	</p>
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('professor', 'Professor : ') }}</div>
			<div class="field">{{ Form::text('professor', Input::old('professor')) }}</div>
		</div>
	</p>

	<p><center>{{ Form::submit('Submit') }}</center></p>

	{{ Form::close() }}
	</div>
</div>
@endsection
</body>
</html>