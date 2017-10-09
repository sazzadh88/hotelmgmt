@extends('layouts.ui')

@section('panel')
	 	<div id="page-wrapper" class="gray-bg dashbard-1">
	 	       <div class="content-main">
	 	 
	 	 	<!--banner-->	
	 			     <div class="banner">
	 			    	<h2>
	 					<a href="{{ route('adminhome') }}">Home</a>
	 					<i class="fa fa-angle-right"></i>
	 					<span>Edit Tarrif</span>
	 					</h2>
	 			    </div>
	 			<!--//banner-->
	 	 	 <!--faq-->
	 	 	<div class="blank">
	 		

				<div class="grid-form1">
					<h3 id="forms-example" class="">Edit Tarrif</h3>
					<form method="POST" action="{{ route('updatetarrif') }}">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputEmail1">Room Type (Ex. Super Delux)</label>
							<input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Room Type" value="{{$roomtarrifs->name}}">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Price</label>
							<input type="hidden" name="id" value="{{ $roomtarrifs->id }}">
							<input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Price" value="{{$roomtarrifs->price}}">
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
		
				</div>

	 		       </div>
	 		
	 		<!--//faq-->
	 			<!---->

	 			
	 	
	 			</div>
	 			</div>
@endsection