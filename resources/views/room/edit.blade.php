@extends('layouts.ui')

@section('panel')
	 	<div id="page-wrapper" class="gray-bg dashbard-1">
	 	       <div class="content-main">
	 	 
	 	 	<!--banner-->	
	 			     <div class="banner">
	 			    	<h2>
	 					<a href="{{ route('adminhome') }}">Home</a>
	 					<i class="fa fa-angle-right"></i>
	 					<span>Edit Room</span>
	 					</h2>
	 			    </div>
	 			<!--//banner-->
	 	 	 <!--faq-->
	 	 	<div class="blank">
	 		

				<div class="grid-form1">
					<h3 id="forms-example" class="">Edit Room</h3>
					<form method="POST" action="{{ route('editsaveroom') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputEmail1">Select Tarrif</label>
							<input type="hidden" name="id" value="{{ $room->id }}">
							<select class="form-control" name="tarrif_id">
								@foreach($tarrifs as $t)
									<option value="{{ $t->id }}"
										

										>{{ $t->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							
							<label for="exampleInputPassword1">Room No</label>
							<input readonly type="text" class="form-control" name="roomno" id="exampleInputPassword1" placeholder="Price" value="{{ $room->roomno }}">
						</div>

						
						<button type="submit" class="btn btn-default">Update</button>
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
		


	 			
				</div>

	 		       </div>
	 		
	 		<!--//faq-->
	 			<!---->

	 			
	 	
	 			</div>
	 			</div>
@endsection



