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
            <td>NotYet</td>
            
            </tr>
                
                     <tr>
                        <td>
                            <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">{{ __('Action') }}</label>
                      <div class="col-md-14">
                                <select id="action" type="action" class="form-control @error('action') is-invalid @enderror" name="action" value="{{ old('action') }}" required autocomplete="action" autofocus>
                                
                                    <option>In-processing</option>
                                    <option>Not valuable</option>
                                    <option>Closed</option>
                                   

                                </select> 

                            </div>
                             </div></td>
                             <td>
                             <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <form class=" form-inline" action="{{route('complaintdetails',$complaint_tbl->id)}}" method="POST">
                     @csrf
                    <input type="submit" class="btn btn-primary" value="Update Data">
                </form>

                            </div>
                        </div>
                        </td>
                        </tr>

        
                
           
            <!--<td>
                <a href="{{ route('send',$complaint_tbl->id)}}" class="btn btn-success">Submit</a>
            </td>-->
       

 

    </table>
    

</div>


@endsection