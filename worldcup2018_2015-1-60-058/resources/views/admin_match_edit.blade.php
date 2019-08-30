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
		
		<form method="POST" action="{{url('/update_match',$match_info->id)}}" enctype="multipart/form-data">
	        <input type="hidden" name="_token" value="{!! csrf_token() !!}"> <!-- this line is must  for every form-->	
	        <fieldset>
		         <legend>Update Match</legend>
		         <div class="form-group">
		       		<label for="student_id">Match No:</label>
		          	<input  type="text" class="form-control" id="team1" name="match_no" value="{{ $match_info->match_no}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team 1:</label>
		          	<input  type="text" class="form-control" id="team1" name="team1" value="{{ $match_info->team1}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team1 Flag img:</label>
		          	<input  type="file" class="form-control" id="team1_img" name="team1_img" src="storage/{{ $match_info->team1_img_path}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team 1 Score:</label>
		          	<input  type="text" class="form-control" id="team1_score" name="team1_score" value="{{ $match_info->team1_score}}">
		        </div>


		         <div class="form-group">
		       		<label for="student_id">Team 2:</label>
		          	<input  type="text" class="form-control" id="team1" name="team2" value="{{ $match_info->team2}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team2 Flag img:</label>
		          	<input  type="file" class="form-control" id="team1_img" name="team2_img" src="storage/{{ $match_info->team2_img_path}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team 2 Score:</label>
		          	<input  type="text" class="form-control" id="team1_score" name="team2_score" value="{{ $match_info->team2_score}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Tie breaker Description:</label>
		          	<input  type="text" class="form-control" id="tie_breaker_desc" name="tie_breaker_desc" value="{{ $match_info->tie_breaker_desc}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Played On:</label>
		          	<input  type="text" class="form-control" id="played_on" name="played_on" value="{{ $match_info->played_on}}">
		        </div>
		        
		         
		        <div class="form-actions">
		        	<button type="submit" class="btn btn-success" name="submit">Update</button>
		        	<button class="btn btn-danger">Cancel</button>
		          	 	
		        </div>
	        </fieldset>				
	        
	      					
	    </form>



@endsection