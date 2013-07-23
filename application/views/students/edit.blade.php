@layout('layouts.default')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Edit Student</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/student-style.css') }}
</head>
<body>
@section('content')
<div class="wrapper">
	<div class="center_box">

	<div class="header">Editing {{ $student->name }}</div>

	{{ render('common.student_errors') }}

	{{ Form::open('student/update', 'PUT') }}

	<p>
		<div class="cont">
			<div class="head">{{ Form::label('name', 'Name : ') }}</div>
			<div class="field">{{ Form::text('name', $student->name) }}</div>
		</div>
	</p>

	<p>
		<div class="cont">
			<div class="head">{{ Form::label('phone', 'Phone : ') }}</div>
			<div class="field">{{ Form::text('phone', $student->phone) }}</div>
		</div>
	</p>
	
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('city', 'City : ') }}</div>
			<div class="field">{{ Form::text('city', $student->city) }}</div>
		</div>
	</p>
	
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('branch', 'Branch : ') }}</div>
			<div class="field">{{ Form::text('branch', $student->branch) }}</div>
		</div>
	</p>
	
	<p>
		<div class="cont">
			<div class="head">{{ Form::label('professor', 'Professor : ') }}</div>
			<div class="field">{{ Form::text('professor', $student->professor) }}</div>
		</div>
	</p>

	{{ Form::hidden('id', $student->id) }}

	<p><center>{{ Form::submit('Update') }}</center></p>

	{{ Form::close() }}
@endsection
</body>
</html>