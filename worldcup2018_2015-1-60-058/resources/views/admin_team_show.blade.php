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
				  		<th>Country</th>
					  <th>Country Img</th>
					  <th>Coach</th>
					 <th>Group</th>
					  <th>Played</th>
					<th>Won</th>
					<th>Draw</th>
					<th>Lost</th>
					<th>Goal Difference</th>
					<th>Points</th>
					<th>Actions</th>
				  </tr>
			</thead>   
			
			<tbody>
				@foreach($team_info as $i)
					<tr>
						<!-- <td><img src="<?php// echo'/storage/$i->stadium_img_path'?>" /></td> -->
						<td class="center">{{$i->country}}</td>
						<td> <img src="storage/{{$i->flag_img_path}}" style="height: 100px;width: 100px;" /></td>
						<td class="center">{{$i->coach}}</td>
						<td class="center">{{$i->group}}</td>
						<td class="center">{{$i->match_played}}</td>
						<td class="center">{{$i->match_won}}</td>
						<td class="center">{{$i->match_draw}}</td>
						<td class="center">{{$i->match_lose}}</td>
						<td class="center">{{$i->goal_diff}}</td>
						<td class="center">{{$i->points}}</td>
						<td class="center">
								
								
								
								<a class="btn btn-info" href="{{URL::to('/edit_team/'.$i->id)}}">
									<i class="halflings-icon white edit"></i>  
								</a>

								<a class="btn btn-danger" href="{{URL::to('/delete_team/'.$i->id)}}" id="delete">
									<i class="halflings-icon white trash"></i> 
								</a>
						</td>
					</tr>
				@endforeach
			 </tbody>
	 </table>            
		
				

@endsection