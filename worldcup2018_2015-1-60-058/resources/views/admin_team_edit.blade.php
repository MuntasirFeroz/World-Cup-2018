@extends('adminLayout')
@section('title','Admin Team')

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
		
		<form method="POST" action="{{url('/update_team',$team_info->id)}}" enctype="multipart/form-data">
	        <input type="hidden" name="_token" value="{!! csrf_token() !!}"> <!-- this line is must  for every form-->	
	        <fieldset>
		         <legend>Update Team</legend>

		         <div class="form-group">
		       		<label for="student_id">Country:</label>
		          	<input  type="text" class="form-control" id="country" name="country" value="{{ $team_info->country}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Flag Img:</label>
		          	<input  type="file" class="form-control" id="flag_img" name="flag_img" src="storage/{{ $team_info->flag_img_path}}">
		        </div>

		    
		        <div class="form-group">
		       		<label for="student_id">Coach:</label>
		          	<input  type="text" class="form-control" id="coach" name="coach" value="{{ $team_info->coach}}">
		        </div>

		        <div class="form-group">
		          	<label for="student_id">Group:</label>
		          	<input  type="text" class="form-control" id="group" name="group" value="{{ $team_info->group}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Match Played:</label>
		          	<input  type="text" class="form-control" id="match_played" name="match_played" value="{{ $team_info->match_played}}">
		        </div>
		         
		         <div class="form-group">
		          	<label for="student_id">Match Won:</label>
		          	<input  type="text" class="form-control" id="match_won" name="match_won" value="{{ $team_info->match_won}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">match_draw:</label>
		          	<input  type="text" class="form-control" id="match_draw" name="match_draw" value="{{ $team_info->match_draw}}">
		        </div>

		        <div class="form-group">
		          	<label for="student_id">match_lose:</label>
		          	<input  type="text" class="form-control" id="match_lose" name="match_lose" value="{{ $team_info->match_lose}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">goal_diff:</label>
		          	<input  type="text" class="form-control" id="goal_diff" name="goal_diff" value="{{ $team_info->goal_diff}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Points:</label>
		          	<input  type="text" class="form-control" id="points" name="points" value="{{ $team_info->points}}">
		        </div>
		         
		        <div class="form-actions">
		        	<button type="submit" class="btn btn-success" name="submit">Update</button>
		        	<button class="btn btn-danger">Cancel</button>
		          	 	
		        </div>
	        </fieldset>				
	        
	      					
	    </form>



@endsection