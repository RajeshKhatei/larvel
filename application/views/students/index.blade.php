@layout('layouts.default')
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Students Record</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/student-style.css') }}
</head>
<body>
@section('content')
<div class="wrapper">
	<div class="center_box">
	<p><div id="add">{{ HTML::link_to_route('new_student', 'Add Student') }}</div></p>
	<div class="header" style="margin-bottom: 10px;">List of all Student</div>
	@foreach($students as $student)
		<div id="view">{{ HTML::link_to_route('student', $student->name, array($student->id)) }}</div><br/>
	@endforeach
	</div>
</div>
@endsection
</body>
</html>