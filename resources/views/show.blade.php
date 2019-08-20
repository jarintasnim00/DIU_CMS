@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary text-black  py-4 " >
<center><strong><h3>View Complaint</h3>
Your complaint details</strong></center>
</div>

<div class="container">
	<table class="table table-responsive table-hover">
		<tr>
			<th>Complaint_no</th>
			<th>Name</th>
			<th>Student_id</th>
			<th>Categories</th>
			<th>Types</th>
			<th>Complaint-date</th>
			<th>Department</th>
			<th>Campus</th>
			<th>Uploded_file</th>
			<th>Action</th>
			<th>  </th>
			<th>  </th>

			
		</tr>
		@php $i =0; @endphp
		@foreach($complaint_tbl as $complaint_tbl)
		@php $i++ @endphp
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $complaint_tbl->name }}</td>
			<td>{{ $complaint_tbl->student_id }}</td>
			<td>{{ $complaint_tbl->categories }}</td>
			<td>{{ $complaint_tbl->types }}</td>
			<td>{{ $complaint_tbl->complaint_date }}</td>
			<td>{{ $complaint_tbl->department }}</td>
			<td>{{ $complaint_tbl->campus }}</td>
			<td>{{ $complaint_tbl->uplode_file }}</td>
			<td>
				<a href="{{ route('edit',$complaint_tbl->id)}}" class="btn btn-success">Edit</a>
				<!--<a href="{{ route('delete',$complaint_tbl->id)}}" class="btn btn-danger">Delete</a>-->
                 </td>
                 <td>
		<form class=" form-inline" action="{{route('delete',$complaint_tbl->id)}}" method="POST">
					 @csrf
					<input type="submit" class="btn btn-danger" value="Delete">
				</form>
				
			</td>
			<!--<td>
				<a href="{{ route('send',$complaint_tbl->id)}}" class="btn btn-success">Submit</a>
			</td>-->
		</tr>

	@endforeach

	</table>
	

</div>


@endsection