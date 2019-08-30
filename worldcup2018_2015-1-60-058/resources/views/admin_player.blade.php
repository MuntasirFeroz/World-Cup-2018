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



		<form method="POST" action="{{url('/save_player')}}" enctype="multipart/form-data">
	        <input type="hidden" name="_token" value="{!! csrf_token() !!}"> <!-- this line is must  for every form-->	
	        <fieldset>
		         <legend>ADD New Player</legend>
		        
		         <div class="form-group">
		       		<label for="student_id">Name:</label>
		          	<input  type="text" class="form-control" id="country" name="player_name">
		        </div>
		        <div class="form-group">
		       		<label for="student_id"> Image:</label>
		          	<input  type="file" class="form-control" id="flag_img" name="player_img">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Country:</label>
		          	<input  type="text" class="form-control" id="player_country" name="player_country">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Position:</label>
		          	<input  type="text" class="form-control" id="player_position" name="player_position">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Jersy NO:</label>
		          	<input  type="text" class="form-control" id="group" name="jersy_no">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Match Played:</label>
		          	<input  type="text" class="form-control" id="match_played" name="match_played">
		        </div>
		         
		         <div class="form-group">
		          	<label for="student_id">Goal scored:</label>
		          	<input  type="text" class="form-control" id="goal_scored" name="goal_scored">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">yellow_cards:</label>
		          	<input  type="text" class="form-control" id="yellow_cards" name="yellow_cards">
		        </div>

		        <div class="form-group">
		          	<label for="student_id">red_cards:</label>
		          	<input  type="text" class="form-control" id="match_lose" name="red_cards">
		        </div>






		        <div class="form-actions">
		        	<button type="submit" class="btn btn-success" name="submit">ADD Team</button>
		        	<button class="btn btn-danger">Cancel</button>
		          	 	
		        </div>
	        </fieldset>				
	        
	      					
	    </form>



@endsection