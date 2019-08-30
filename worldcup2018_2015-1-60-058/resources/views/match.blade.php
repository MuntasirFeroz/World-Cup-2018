@extends('master')
@section('title','Match')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
					<h1 class="title text-center">Matches</h1>
				<div class="content">
					@foreach($match_info->chunk(3) as $match)
					<div class="row">
						@foreach($match as $i)
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <div class="caption">
					        <h4> <strong class="text-primary" >{{$i->team1}}</strong>
					        	<img src="storage/{{$i->team1_img_path}}" alt="..." style="height:50px;width:50px; "> 
					        	<strong class="text-primary" >{{$i->team1_score}}:</strong> 
					        	:<strong class="text-primary">{{$i->team2_score}}:</strong> 
					        	<img src="storage/{{$i->team2_img_path}}" alt="..." style="height:50px;width:50px; ">
					        	<strong class="text-primary" >{{$i->team2}}</strong>
					        </h4>
					        
					      </div>
					    </div>
					  </div>
					 @endforeach
					</div>
					@endforeach
				<!--
					<div class="title text-center">
						<h1>STADIUM</h1>
						<p>THIS IS STADIUM PAGE</p>
					</div>
				-->
				</div>
			</div>
		

		</div><!-- end of row-->
	</div>

	@endsection