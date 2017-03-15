<!DOCTYPE html>
<html>
<style type="text/css">
	.box{
		margin:2em auto;
		width: 500px;
		height: 500px;
	}

</style>
<head>
	<title>Edit</title>
</head>
<body>


@extends('layouts.app')

@section('content')

<div class="box">
<h1 style="margin-top: 80px;">Edit Student</h1>

	<form method="POST" action="/grade/{{ $grade->id }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}

		<input type="hidden" name="id" value="">
		<div>
		<label>Student Number</label>
			<input type="text" name="student_number" value="" style="border-radius: 6px; width:600px; height:45px; margin-bottom:20px;">
		</div>
		<div>
		<label>Name</label>
			<input type="text" name="name" value="{{ $grade->name }}" style="border-radius: 6px; width:600px; height:45px; margin-bottom: 20px;"  >

		<div>
			<button type="submit" class="btn btn-success">Save</button>
			<button class="btn btn-danger"><a href="{{ url('student-welcome') }}">Cancel</a></button>
		</div>
		</div>
	</form>
	</div>

	@endsection

	</body>
	</html>