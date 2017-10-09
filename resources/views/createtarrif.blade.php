@extends('layouts.ui')

@section('panel')
	 	<div id="page-wrapper" class="gray-bg dashbard-1">
	 	       <div class="content-main">
	 	 
	 	 	<!--banner-->	
	 			     <div class="banner">
	 			    	<h2>
	 					<a href="{{ route('adminhome') }}">Home</a>
	 					<i class="fa fa-angle-right"></i>
	 					<span>Create Tarrif</span>
	 					</h2>
	 			    </div>
	 			<!--//banner-->
	 	 	 <!--faq-->
	 	 	<div class="blank">
	 		

				<div class="grid-form1">
					<h3 id="forms-example" class="">Create Tarrif</h3>
					<form method="POST" action="{{ route('createtarrif') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputEmail1">Room Type (Ex. Super Delux)</label>
							<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Room Type">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Price</label>
							<input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Price">
						</div>

						
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					@if ($errors->any())
					    <div class="alert alert-info">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
		<h1>Room Tariifs</h1>
		<br>
					@if($tarrifs)
					<table class="table table-bordered">
						<tr class="class="table-row"">
							<td>Name</td>
							<td>Price</td>
							<td>Created on</td>
							<td>Action</td>
						</tr>
		 				@foreach($tarrifs as $r)
							<tr class="class="table-row"">
								<td>{{$r->name}}</td>
								<td>{{$r->price}}</td>
								<td>{{date('F d, Y', strtotime($r->created_at))}}</td>
								<td>
									<a class="btn btn-info" href="edittarrif/{{$r->id}}"><i class="fa fa-pencil"></i></a>


									<a class="btn btn-danger" href="deletetarrif/{{$r->id}}"><i class="fa fa-trash-o"></i></a>


								</td>
							</tr>
		 				@endforeach
					</table>
	 			@endif
				</div>

	 		       </div>
	 		
	 		<!--//faq-->
	 			<!---->

	 			
	 	
	 			</div>
	 			</div>
@endsection