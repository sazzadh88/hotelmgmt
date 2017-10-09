@extends('layouts.ui')

@section('panel')
	 	<div id="page-wrapper" class="gray-bg dashbard-1">
	 	       <div class="content-main">
	 	 
	 	 	<!--banner-->	
	 			     <div class="banner">
	 			    	<h2>
	 					<a href="{{ route('adminhome') }}">Home</a>
	 					<i class="fa fa-angle-right"></i>
	 					<span>Create Room</span>
	 					</h2>
	 			    </div>
	 			<!--//banner-->
	 	 	 <!--faq-->
	 	 	<div class="blank">
	 		

				<div class="grid-form1">
					<h3 id="forms-example" class="">Create Room</h3>
					<form method="POST" action="{{ route('saveroom') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputEmail1">Select Tarrif</label>
							
							<select class="form-control" name="tarrif_id">
								@foreach($tarrifs as $t)
									<option value="{{ $t->id }}">{{ $t->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Room No</label>
							<input type="text" class="form-control" name="roomno" id="exampleInputPassword1" placeholder="Price">
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
					@if($rooms)
					<table class="table table-bordered">
						<tr class="class="table-row"">
							<td>Room No</td>
							<td>Room Type</td>
							<td>Price</td>
							<td>Availability</td>
							<td>Created on</td>
							<td>Action</td>
						</tr>
		 				@foreach($rooms as $r)
							<tr class="class="table-row"">
								<td>{{$r->roomno}}</td>
							
								<td>{{ App\Room::find($r->id)->tarrif->name }}</td>
								<td>{{ App\Room::find($r->id)->tarrif->price }}</td>
								
								
								<td>{{ $r->available ? 'Yes':'No' }}</td>
								
								<td>{{date('F d, Y', strtotime($r->created_at))}}</td>
								<td>
									<a class="btn btn-info" href="editroom/{{$r->id}}"><i class="fa fa-pencil"></i></a>


									<a class="btn btn-danger" href="deleteroom/{{$r->id}}"><i class="fa fa-trash-o"></i></a>


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



