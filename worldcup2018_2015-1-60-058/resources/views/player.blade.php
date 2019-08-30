@extends('master')
@section('title','Players')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
					<h1 class="title text-center">PLAYERS</h1>
				<div class="content">
					@foreach($player_info->chunk(3) as $player)
					<div class="row">
						@foreach($player as $i)
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="storage/{{$i->player_img_path}}" alt="...">
					      <div class="caption">
					        <h3> <strong class="text-primary" >{{$i->player_name}}</strong> </h3>
					        <h5> <strong class="text-primary" >Country: </strong>  {{$i->player_country}}</h5>
					        <h5> <strong class="text-primary" >Position: </strong>  {{$i->player_position}}</h5>
					        <h5> <strong class="text-primary" >Jersy No: </strong>  {{$i->jersy_no}}</h5>
					        <h5> <strong class="text-primary" >Match Played: </strong>  {{$i->match_played}}</h5>

					        <h5> <strong class="text-primary" >Goal Scored: </strong>  {{$i->goal_scored}}</h5>
					        <h5> <strong class="text-primary" >Yellow Card: </strong>  {{$i->yellow_cards}}</h5>
					        <h5> <strong class="text-primary" >Red Card: </strong>  {{$i->red_cards}}</h5>
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