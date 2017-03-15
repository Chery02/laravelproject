@extends('layouts.app')

@section('content')

<h1 style="margin-top: 80px;">Students</h1>


<table class="table">
	<thead class="thead-inverse">
	 <tr>
	 	<th scope="row"></th>
		<th>No.</th>
		<th>Name</th>
		<th>Filipino 2</th>
		<th>Statistics</th>
		<th>Family Planning</th>
		<th>Business Process</th>
		<th>Bible Science 2</th>
        <th>Web App 2</th>
        <th>Team Sports</th>
	 </tr>	
	</thead>
	<tbody>
	
	 <tr>
	 	<th scope="row"></th>
	 	<td>{{ $grade->id }}</td>
	 	<td>{{ $grade->name}}</td>
	 	<td>{{ $grade->Filipino_2}}</td>
	 	<td>{{ $grade->Statistics}}</td>
	 	<td>{{ $grade->Family_Planning}}</td>
	 	<td>{{ $grade->Business_Process}}</td>
	 	<td>{{ $grade->Bible_Science_2}}</td>
	 	<td>{{ $grade->Web_App_2}}</td>
	 	<td>{{ $grade->Team_Sports}}</td>
	 </tr>
	
	
	</tbody>
</table>
@endsection