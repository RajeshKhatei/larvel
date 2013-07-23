@if($errors->has())
	<div id="error">
		{{ $errors->first('name', '<div>:message</div>') }}
		{{ $errors->first('phone', '<div>:message</div>') }}
		{{ $errors->first('city', '<div>:message</div>') }}
		{{ $errors->first('branch', '<div>:message</div>') }}
		{{ $errors->first('professor', '<div>:message</div>') }}
	</div>
@endif