@extends('layouts.ui')

@section('panel')
	 	<div id="page-wrapper" class="gray-bg dashbard-1">
	 	    <div class="content-main">

	 	        <!--banner-->
	 	        <div class="banner">
	 	            <h2>
	 					<a href="{{route('adminhome')}}">Home</a>
	 					<i class="fa fa-angle-right"></i>
	 					<span>All Users</span>
	 					</h2>
	 	        </div>
	 	        <!--//banner-->
	 	        <!--faq-->
	 	        <div class="blank">
					@if ($errors->any())
					    <div class="alert alert-info">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
	 	            <div class="blank-page">
						
	 	                <table class="table tablehover" id="allusers">
	 	                	<thead>                 
	 	                	    <tr>                
	 	                	        <th>Name</th>    
	 	                	        <th>Mobile</th>
	 	                	        <th>Mobile</th>
	 	                	        <th>Registered On</th>
	 	                	        <th>Action</th>
	 	                	                        
	 	                	    </tr>
	 	                	</thead>
	 	                	<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->mobile}}</td>
									<td>{{$user->email}}</td>
									<td>{{date('F d, Y', strtotime($user->created_at))}}</td>
									<td>
										<a title="View Bookings" class="btn btn-info" href="userbookings/{{$user->id}}"> <i class="fa fa-eye"></i></a>

										<a class="btn btn-danger" href="userdelete/{{$user->id}}"><i class="fa fa-trash-o"></i></a>
									</td>
								</tr>
							@endforeach
							</tbody>
	 	                </table>
	 	            </div>
	 	        </div>

	 	        <!--//faq-->
	 	        <!---->

	 	    </div>
	 	</div>
	 	<div class="clearfix"> </div>

</script>
@endsection
