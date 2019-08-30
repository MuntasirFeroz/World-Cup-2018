@extends('master')
@section('title','Home')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
					<h1 class="title text-center">STADIUMS</h1>
				<div class="content">
					@foreach($stadium_info->chunk(3) as $stadium)
					<div class="row">
						@foreach($stadium as $i)
					  <div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      <img src="storage/{{$i->stadium_img_path}}" alt="...">
					      <div class="caption">
					        <h4> <strong class="text-primary" >Stadium Name:</strong> {{$i->stadium_name}}</h4>
					        <h5> <strong class="text-primary" >City: </strong>  {{$i->stadium_city}}</h5>
							<h5> <strong class="text-primary" >Opened in: </strong>  {{$i->opened}}</h5>
							<h5> <strong class="text-primary" >Capacity: </strong>  {{$i->capacity}}</h5>
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