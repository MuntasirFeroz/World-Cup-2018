 @extends('master')
@section('title','Home')
@section('content')
 	<div class="container-fluid">  
		<div class="row" style="margin-top: none;">
			<div class="col-lg-12">
				<div class="content">
			
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
						    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							    
							    

							    <div class="item active">
							      <img src="{{URL::asset('storage/images/HomePageSliders/coaches.jpg')}}" alt="...">
							      <div class="carousel-caption">
							        <h1 class="bg-primary" style="font-family: dusha_plusregular;"><strong>BEST COACHES IN RUSSIA 2018</strong> </h1>
							      </div>
							    </div>

							    <div class="item">
							      <img src="{{URL::asset('storage/images/HomePageSliders/BestPlayers.jpg')}}" alt="...">
							      <div class="carousel-caption">
							        <h1 class="bg-primary" style="font-family: dusha_plusregular;"><strong>BEST PLAYERS IN RUSSIA 2018</strong> </h1>
							      </div>
							    </div>

							    <div class="item">
							      <img src="{{URL::asset('storage/images/HomePageSliders/cup.jpg')}}" alt="...">
							      <div class="carousel-caption">
							        	<h1 class="bg-primary" style="font-family: dusha_plusregular;"> <strong>2018 FIFA WORLD CUP RUSSIA WINNERS</strong></h1>
							      </div>
							    </div>
						    
						  </div>

						  <!-- Controls -->
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>


				</div><!-- end of content-->
			</div>
								

		</div><!-- end of row-->

<!-- row 2-->
		<div class="row" style="margin-top: 10px; margin-bottom: 100px;">
		  	<div class="col-sm-6 col-md-4" style=" height:40% ;width: 25%;">
			    <div class="thumbnail">
			      <img src="{{URL::asset('storage/images/HomePageSliders/shortStories/HYUNDAI GOAL OF THE TOURNAMENT/GOT.png')}}" alt="...">
			      <div class="caption" style="background-color: rgb(235,235,235);">
			        <h4> <strong>HYUNDAI GOAL OF THE TOURNAMENT</strong> </h4>
			        <p>From 169 goals scored in Russia, the winning goal has been chosen!</p>
			        <p><a href="/story1" class="btn btn-primary" role="button">Read More</a></p>
			      </div>
			    </div>
			</div>

			<div class="col-sm-6 col-md-4" style=" height:40% ;width: 25%;">
			    <div class="thumbnail">
			      <img src="{{URL::asset('storage/images/HomePageSliders/shortStories/Russia 2018 most engaging FIFA World Cup ever/engage.jpg')}}" alt="...">
			      <div class="caption" style="background-color: rgb(235,235,235);">
			       <h4> <strong>Russia 2018 most engaging FIFA World Cup ever</strong> </h4>
			        <p>New data released by FIFA has revealed that Russia 2018 was the most .. </p>
			        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
			      </div>
			    </div>
			</div>

			<div class="col-sm-6 col-md-4" style=" height:40% ;width: 25%;">
			    <div class="thumbnail">
			      <img src="{{URL::asset('storage/images/HomePageSliders/shortStories/How the world watched Russia 2018/final.jpg')}}" alt="...">
			      <div class="caption" style="background-color: rgb(235,235,235);">
			        <h4> <strong>How the world watched Russia 2018</strong> </h4>
			        <p>People gather in the fan zone to watch the Russia 2018 Final </p>
			        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
			      </div>
			    </div>
			</div>

			<div class="col-sm-6 col-md-4" style=" height:40% ;width: 25%;">
			    <div class="thumbnail">
			      <img src="{{URL::asset('storage/images/HomePageSliders/shortStories/France triumphant in ravishing Russia/mbappa.jpg')}}" alt="...">
			      <div class="caption" style="background-color: rgb(235,235,235);">
			        <h4> <strong>France triumphant in ravishing Russia</strong> </h4>
			        <p>The 2018 FIFA World Cup Russia™ thrilled from beginning to end.</p>
			        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
			      </div>
			    </div>
			</div>

		  
		</div> <!-- END OF ROW 2-->


	 </div> <!-- container end-->


	@endsection