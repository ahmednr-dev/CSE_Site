@extends('layouts.default')


@section('title','| About Us')


@section('content')
    


            <!-- Content -->

            
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/about-cse.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
				   				<div class="slider-text-inner text-center">
				   					<h1><!--Write on photo --></h1>
										<h2><!--Write on photo --> <a href='#' target="_blank"></a></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>		   	
			  	</ul>
		  	</div>
		</aside>		
		@if ($about->count() > 0 )
		<div id="fh5co-about">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center heading-section">
					<h3>{{$about->title}}</h3>
					<p><!-- --></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center animate-box">
					<p><img src="images/about/{{$about->photo}}" alt="about cse" class="img-responsive"></p>
				</div>
				<div class="col-md-8 col-md-offset-2 text-center animate-box">
					<div class="about-desc">
						<h3> 	<h3>{{$about->subtitle}}</h3>
                        </h3>
						<p>
                            
								<h3>{{$about->description}}</h3>
                        </p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</div>

		@else
		<div id="fh5co-about">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center heading-section">
					<h3>No information</h3>
					<p><!-- --></p>
				</div>
			</div>
		@endif			
	
	</div><!-- END container-wrap -->





            <!-- -->


            @endsection