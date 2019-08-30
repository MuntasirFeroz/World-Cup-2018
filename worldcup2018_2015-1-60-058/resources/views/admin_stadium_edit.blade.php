@extends('adminLayout')
@section('title','Admin Stadium')

@section('content')

	<p class="alert-success " style="font-size: 20px;color:white; background-color: green;">
		<?php 
			$message=Session::get('message');
			if($message)
			{
				echo $message;
				Session::put('message',null);
		
			}	
			

		?>
		
	</p>
		
		<form method="POST" action="{{url('/update_stadium',$stadium_info->id)}}" enctype="multipart/form-data">
	        <input type="hidden" name="_token" value="{!! csrf_token() !!}"> <!-- this line is must  for every form-->	
	        <fieldset>
		         <legend>Update Stadium</legend>
		         <div class="form-group">
		       		<label for="student_id">Stadium Image:</label>
		          	<input  type="file" class="form-control" id="stadium_name" name="stadium_img" src="storage/{{ $stadium_info->stadium_img_path}}">
		        </div>
		        <div class="form-group">
		       		<label for="student_id">Stadium Name:</label>
		          	<input  type="text" class="form-control" id="stadium_name" name="stadium_name" value="{{ $stadium_info->stadium_name}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Stadium City:</label>
		          	<input  type="text" class="form-control" id="stadium_name" name="stadium_city" value="{{ $stadium_info->stadium_city}}">
		        </div>

		        <div class="form-group">
		          	<label for="student_id">Opened in:</label>
		          	<input  type="text" class="form-control" id="opened" name="opened" value="{{ $stadium_info->opened}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Capacity:</label>
		          	<input  type="text" class="form-control" id="capacity" name="capacity" value="{{$stadium_info->capacity}}">
		        </div>
		         
		        <div class="form-actions">
		        	<button type="submit" class="btn btn-success" name="submit">Update</button>
		        	<button class="btn btn-danger">Cancel</button>
		          	 	
		        </div>
	        </fieldset>				
	        
	      					
	    </form>



@endsection