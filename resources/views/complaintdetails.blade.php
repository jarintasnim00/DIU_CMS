@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary text-black  py-4 col-md-4" >
<center><strong><h3></h3>
Admin-Action</strong></center>
</div>

<div class="container">
    <table class="table table-responsive table-hover">
        <tr>
           
            <th>Name:</th>
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
        
       
        <tr>
            
            <td>{{ $complaint_tbl->name }}</td>
            <td>{{ $complaint_tbl->student_id }}</td>
            <td>{{ $complaint_tbl->categories }}</td>
            <td>{{ $complaint_tbl->types }}</td>
            <td>{{ $complaint_tbl->complaint_date }}</td>
            <td>{{ $complaint_tbl->department }}</td>
            <td>{{ $complaint_tbl->campus }}</td>
            <td>{{ $complaint_tbl->uplode_file }}</td>
            <td>In-processing</td>
            
            
    
                        
                             <td>
        <form class=" form-inline" action="{{route('delete',$complaint_tbl->id)}}" method="POST">
                     @csrf
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
                
            </td>
                        </tr>






        
                
           
            <!--<td>
                <a href="{{ route('send',$complaint_tbl->id)}}" class="btn btn-success">Submit</a>
            </td>-->
       

 

    </table>
    
    

</div>




@endsection