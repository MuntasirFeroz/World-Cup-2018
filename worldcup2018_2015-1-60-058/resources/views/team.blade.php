@extends('master')
@section('title','Team')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
					<h1 class="title text-center">TEAMS</h1>
				<div class="content">
					@foreach($team_info->chunk(3) as $team)
					<div class="row">
						@foreach($team as $i)
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="storage/{{$i->flag_img_path}}" alt="...">
					      <div class="caption">
					        <h4> <strong class="text-primary" >Country:</strong> {{$i->country}}</h4>
					        <h5> <strong class="text-primary" >Coach: </strong>  {{$i->coach}}</h5>
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