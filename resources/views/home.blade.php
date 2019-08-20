@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row " >
        <div class="col-md-3" >
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   You are logged in as <strong>User</strong>!
                </div>
                <div class="card-header"><a href="{{route('complaint')}}">Make complain</a> </div>
                <form method="post">
                  <div class="card-header"><a href="{{url('complaintdetails/{id}')}}">Status of complaint</a></div>
                </form>
                
                
            </div>
        </div>



        <div class="col-md-9" >
            <div class="card">
           <div class="panel">
            <div class="panel-heading">
                <center><strong>Complain Catagory</strong></center>
                </div>
            <div class="panel-body">
                 <table>
                    <tr>
                    <td><a href="{{route('complaint')}}"><img src="img/transport.png" style=" height:150;weight:70px; "/></a><br>
                    Academic </td>
                    <td><a href="{{route('complaint')}}"><img src="img/library.png"  style=" height:150;weight:1500px; "/></a><br>
                         Library
                   </td>
                    </tr>
                    <br>
                    <tr>
                    <td><a href="{{route('complaint')}}"><img src="img/bus.jpg" style=" height:150;weight:100px; "/></a><br>
                    Transport</td>
                    <td><a href="{{route('complaint')}}"><img src="img/canteen.jpg" style=" height:150;weight:100px; "/></a>
                    <br>
                    Canteen</td>
                    </tr>
                    <tr>
                    <td><a href="{{route('complaint')}}"><img src="img/account.jpg" style=" height:150;weight:100px; "/></a><br>
                    Accounts</td>
                    <td><a href="{{route('complaint')}}"><img src="img/hostel.jpg" style=" height:150;weight:100px; "/></a>
                    <br>
                    Hostel</td>
                    </tr>


                </table>

                  </div><br><br>
            <div class="panel-footer">
                All Rights Reserved @ Daffodil International University
            </div>
               

          
        </div>
  </div>
    </div>

</div>


@endsection



<!--

    <div class="row">
                <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                 </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; "/>
                    </div>
                 </div>
                   </div>
                
                 <div class="row">
                <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; "  />
                    </div>
                 </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                 </div>
                 <div class="col-md-3" >
                    <div class="panel-body">
                    <img src="img/transport.png" style=" height:150;weight:100px; " />
                    </div>
                 </div>
                 </div>

   



