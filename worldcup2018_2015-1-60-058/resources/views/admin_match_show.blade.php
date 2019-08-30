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
				  		<th>Match No</th>
					  <th>Team 1</th>
					  <th>Team1 Flag</th>
					 <th>Team 1 Score</th>
					 <th>Team 2</th>
					  <th>Team2 Flag</th>
					 <th>Team 2 Score</th>
					 <th>Tie Breaker Description</th>
					  <th>Played On</th>
					<th>Actions</th>
				  </tr>
			</thead>   
			
			<tbody>
				@foreach($match_info as $i)
					<tr>
						<td class="center">{{$i->match_no}}</td>
						<td class="center">{{$i->team1}}</td>
						<!-- <td><img src="<?php// echo'/storage/$i->stadium_img_path'?>" /></td> -->
						<td> <img src="storage/{{$i->team1_img_path}}" style="height: 100px;width: 100px;" /></td>
						<td class="center">{{$i->team1_score}}</td>
						<td class="center">{{$i->team2}}</td>
						<!-- <td><img src="<?php// echo'/storage/$i->stadium_img_path'?>" /></td> -->
						<td> <img src="storage/{{$i->team2_img_path}}" style="height: 100px;width: 100px;" /></td>
						<td class="center">{{$i->team2_score}}</td>
						<td class="center">{{$i->tie_breaker_desc}}</td>
						<td class="center">{{$i->played_on}}</td>
						<td class="center">
								
							
								
								<a class="btn btn-info" href="{{URL::to('/edit_match/'.$i->id)}}">
									<i class="halflings-icon white edit"></i>  
								</a>

								<a class="btn btn-danger" href="{{URL::to('/delete_match/'.$i->id)}}" id="delete">
									<i class="halflings-icon white trash"></i> 
								</a>
						</td>
					</tr>
				@endforeach
			 </tbody>
	 </table>            
		
				

@endsection