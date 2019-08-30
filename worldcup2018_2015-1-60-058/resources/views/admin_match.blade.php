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


		<form method="POST" action="{{url('/save_match')}}" enctype="multipart/form-data">
	        <input type="hidden" name="_token" value="{!! csrf_token() !!}"> <!-- this line is must  for every form-->	
	        <fieldset>
		         <legend>ADD New Match</legend>

		         <div class="form-group">
		       		<label for="student_id">Match No:</label>
		          	<input  type="text" class="form-control" id="team1" name="match_no">
		        </div>
		         <div class="form-group">
		       		<label for="student_id">Team 1:</label>
		          	<input  type="text" class="form-control" id="team1" name="team1">
		        </div>
		        <div class="form-group">
		       		<label for="student_id">Team1 Flag img:</label>
		          	<input  type="file" class="form-control" id="team1_img" name="team1_img">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team 1 Score:</label>
		          	<input  type="text" class="form-control" id="team1_score" name="team1_score">
		        </div>


		        <div class="form-group">
		       		<label for="student_id">Team 2:</label>
		          	<input  type="text" class="form-control" id="team2" name="team2">
		        </div>
		        <div class="form-group">
		       		<label for="student_id">Team2 Flag img:</label>
		          	<input  type="file" class="form-control" id="team2_img" name="team2_img">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Team 2 Score:</label>
		          	<input  type="text" class="form-control" id="team2_score" name="team2_score">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Tie breaker Description:</label>
		          	<input  type="text" class="form-control" id="tie_breaker_desc" name="tie_breaker_desc">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Played On:</label>
		          	<input  type="text" class="form-control" id="played_on" name="played_on">
		        </div>
		         
		        <div class="form-actions">
		        	<button type="submit" class="btn btn-success" name="submit">ADD STADIUM</button>
		        	<button class="btn btn-danger">Cancel</button>
		          	 	
		        </div>
	        </fieldset>				
	        
	      					
	    </form>



@endsection