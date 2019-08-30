@extends('adminLayout')
@section('title','Admin Stadium')

@section('content')
<p class="alert-success" style="font-size: 20px;color:white; background-color: green;">
	<?php
		$message=Session::get('message');
		if($message)
		{
			echo $message;
			Session::put('message',null);
		}


	?>
</p>

	
		
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
			<thead>
				  <tr>
				  		<th>Name</th>
					  <th>Player Image</th>
					  <th>Country</th>
					 <th>Position</th>
					  <th>Jersy No</th>
					<th> Match Played</th>
					<th>Goals</th>
					<th>Yellow Card </th>
					<th>Red Card</th>
					<th>Actions</th>
				  </tr>
			</thead>   
			
			<tbody>
				@foreach($player_info as $i)
					<tr>
						<!-- <td><img src="<?php// echo'/storage/$i->stadium_img_path'?>" /></td> -->
						<td class="center">{{$i->player_name}}</td>
						<td> <img src="storage/{{$i->player_img_path}}" style="height: 100px;width: 100px;" /></td>
						<td class="center">{{$i->player_country}}</td>
						<td class="center">{{$i->player_position}}</td>
						<td class="center">{{$i->jersy_no}}</td>
						<td class="center">{{$i->match_played}}</td>
						<td class="center">{{$i->goal_scored}}</td>
						<td class="center">{{$i->yellow_cards}}</td>
						<td class="center">{{$i->red_cards}}</td>

						<td class="center">
								
								
								
								<a class="btn btn-info" href="{{URL::to('/edit_player/'.$i->id)}}">
									<i class="halflings-icon white edit"></i>  
								</a>

								<a class="btn btn-danger" href="{{URL::to('/delete_player/'.$i->id)}}" id="delete">
									<i class="halflings-icon white trash"></i> 
								</a>
						</td>
					</tr>
				@endforeach
			 </tbody>
	 </table>            
		
				

@endsection