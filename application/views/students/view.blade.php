@layout('layouts.default')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>View students</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/student-style.css') }}
</head>
<body>
@section('content')
<div class="wrapper">
	<div class="center_box">

	<div class="header">Details of {{ $student->name }}</div>
	<P>
		<div class="cont">
			<div class="head">{{ Form::label('name', 'Name : ') }}</div>
			<div class="fields">{{ $student->name }}</div>
		</div>
	</P>
	
	<P>
		<div class="cont">
			<div class="head">{{ Form::label('phone', 'Phone : ') }}</div>
			<div class="fields">{{ $student->phone }}</div>
		</div>
	</P>
	
	<P>
		<div class="cont">
			<div class="head">{{ Form::label('city', 'City : ') }}</div>
			<div class="fields">{{ $student->city }}</div>
		</div>
	</P>
	
	<P>
		<div class="cont">
			<div class="head">{{ Form::label('branch', 'Branch : ') }}</div>
			<div class="fields">{{ $student->branch }}</div>
		</div>
	</P>
	
	<P>
		<div class="cont">
			<div class="head">{{ Form::label('professor', 'Professor : ') }}</div>
			<div class="fields">{{ $student->professor }}</div>
		</div>
	</P>
	
	<div class="">
		<div class="button">{{ HTML::link_to_route('students', 'Students') }} </div> 
		<div class="button">{{ HTML::link_to_route('edit_student', 'Edit', array($student->id)) }} </div>
		{{ Form::open('student/delete', 'DELETE', array('style'=>'display: inline;'))}}
		{{ Form::hidden('id', $student->id) }}
		{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</div>
@endsection
</body>
</html>