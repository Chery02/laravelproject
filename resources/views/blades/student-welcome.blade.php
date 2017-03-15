@extends('layouts.app')

@section('content')

<h1 style="margin-top: 50px;">Students</h1>

<table class="table">
	<thead class="thead-inverse">
	 <tr>
	 	<th scope="row"></th>
		<th>No.</th>
		<th>Name</th>
	 </tr>	
	</thead>
	<tbody>
		 
	 	@foreach ($grades as $grade)	
	 <tr>
	 	<th scope="row"></th>
	 
	 	<td>{{ $grade->id}}</td>
	 	<td>{{ $grade->name}}</td>
	 
	 	<td>
	 		<button class="btn btn-info"><a href="/grade/{{ $grade->id }}/edit">Edit</a></button>
	 		<button class="btn btn-danger"><a href="/delete/{{ $grade->id }}">Delete</a></button>
	 		<button class="btn"><a href="/grade/{{ $grade->id }}">View-Grade</a></button>		
	 	</td>
	 </tr>
	 @endforeach
	</tbody>
</table>
@endsection
