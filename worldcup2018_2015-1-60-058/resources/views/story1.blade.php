 @extends('master')
@section('title','Home')
@section('content')
	<div class="container">  
		<div class="row" style="margin-top: none;">
			<div class="col-lg-12">
				<div class="content">
					<div class="col-lg-12">
						<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/1.jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 5%">
						<p style="font-size: 20px;"> <strong>The vote for the 2018 FIFA World Cup Russia™ Goal of the Tournament, presented by Hyundai, has now concluded. From a shortlist of the best 18 goals at Russia 2018, Benjamin Pavard's strike for France against Argentina was chosen as the best!
						</strong>
						</p>
					</div>
				</div>
			</div>	
		</div>

		<div class="row">
			<h1 class="title text-center">The Other Candidates</h1>
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Cristiano Ronaldo 3rd goal (Portugal-Spain).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Cristiano Ronaldo 3rd goal (Portugal-Spain)</h4>	
			</div>
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Artem Dzyuba goal (Russia-Egypt).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Artem Dzyuba goal (Russia-Egypt)</h4>	
			</div>
			
		</div>

		<div class="row">
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Denis Cheryshev 1st goal (Russia-Saudi Arabia).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">	
				<h4>Denis Cheryshev 1st goal (Russia-Saudi Arabia)</h4>	
			</div>
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Dries Mertens goal (Belgium-Panama).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Dries Mertens goal (Belgium-Panama)</h4>		
			</div>
			
		</div>

		<div class="row">
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Jesse Lingard Goal (England-Panama).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Jesse Lingard Goal (England-Panama)</h4>		
			</div>
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Juan Quintero goal (Colombia-Japan).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Juan Quintero goal (Colombia-Japan)</h4>		
			</div>
			
		</div>

		<div class="row">
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Luka Modric Goal (Argentina-Croatia).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Luka Modric Goal (Argentina-Croatia)</h4>		
			</div>
			<div class="col-lg-6">
				<img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/Nacho goal (Portugal-Spain).jpg')}}" class="img-responsive" style="height: 400px;width: 100%;margin-bottom: 2%;margin-top: 5%;">
				<h4>Nacho goal (Portugal-Spain)</h4>		
			</div>
			
		</div>
	</div>		
@endsection