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
		
		<form method="POST" action="{{url('/update_player',$player_info->id)}}" enctype="multipart/form-data">
	        <input type="hidden" name="_token" value="{!! csrf_token() !!}"> <!-- this line is must  for every form-->	
	        <fieldset>
		         <legend>Update Player</legend>

		         <div class="form-group">
		       		<label for="student_id">Name:</label>
		          	<input  type="text" class="form-control" id="country" name="player_name" value="{{ $player_info->player_name}}">
		        </div>

		        <div class="form-group">
		       		<label for="student_id">Player Img:</label>
		          	<input  type="file" class="form-control" id="flag_img" name="player_img" src="storage/{{ $player_info->player_img_path}}">
		        </div>

		    
		        <div class="form-group">
		       		<label for="student_id">Player country:</label>
		          	<input  type="text" class="form-control" id="coach" name="player_country" value="{{ $player_info->player_country}}">
		        </div>

		        <div class="form-group">
		          	<label for="student_id">Position:</label>
		          	<input  type="text" class="form-control" id="player_position" name="player_position" value="{{ $player_info->player_position}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Jersy No:</label>
		          	<input  type="text" class="form-control" id="match_played" name="jersy_no" value="{{ $player_info->jersy_no}}">
		        </div>
		         
		         <div class="form-group">
		          	<label for="student_id">Match Played:</label>
		          	<input  type="text" class="form-control" id="match_won" name="match_played" value="{{ $player_info->match_played}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Goals:</label>
		          	<input  type="text" class="form-control" id="match_draw" name="goal_scored" value="{{ $player_info->goal_scored}}">
		        </div>

		        <div class="form-group">
		          	<label for="student_id">Yellow Card :</label>
		          	<input  type="text" class="form-control" id="match_lose" name="yellow_cards" value="{{ $player_info->yellow_cards}}">
		        </div>


		        <div class="form-group">
		          	<label for="student_id">Red Card:</label>
		          	<input  type="text" class="form-control" id="goal_diff" name="red_cards" value="{{ $player_info->red_cards}}">
		        </div>


		         
		        <div class="form-actions">
		        	<button type="submit" class="btn btn-success" name="submit">Update</button>
		        	<button class="btn btn-danger">Cancel</button>
		          	 	
		        </div>
	        </fieldset>				
	        
	      					
	    </form>



@endsection