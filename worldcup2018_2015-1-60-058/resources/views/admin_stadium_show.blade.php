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
				  		<th>Stadium img</th>
					  <th>Stadium name</th>
					  <th>City</th>
					 <th>Opened in</th>
					  <th>Capacity</th>
					<th>Actions</th>
				  </tr>
			</thead>   
			
			<tbody>
				@foreach($stadium_info as $i)
					<tr>
						<!-- <td><img src="<?php// echo'/storage/$i->stadium_img_path'?>" /></td> -->
						<td> <img src="storage/{{$i->stadium_img_path}}" style="height: 100px;width: 100px;" /></td>
						<td class="center">{{$i->stadium_name}}</td>
						<td class="center">{{$i->stadium_city}}</td>
						<td class="center">{{$i->opened}}</td>
						<td class="center">{{$i->capacity}}</td>
						<td class="center">
								
								<a class="btn btn-success" href="#">
									<i class="halflings-icon white zoom-in"></i>  
								</a>
								
								<a class="btn btn-info" href="{{URL::to('/edit_stadium/'.$i->id)}}">
									<i class="halflings-icon white edit"></i>  
								</a>

								<a class="btn btn-danger" href="{{URL::to('/delete_stadium/'.$i->id)}}" id="delete">
									<i class="halflings-icon white trash"></i> 
								</a>
						</td>
					</tr>
				@endforeach
			 </tbody>
	 </table>            
		
				

@endsection