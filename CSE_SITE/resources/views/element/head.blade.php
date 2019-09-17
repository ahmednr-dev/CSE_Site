<?php
use App\Slide;

$slide = Slide::all();

?>
<!-- <img src="/imag/eng_logo.jpg" alt="Logo" class="img-thumbnail rounded float-right navbar-brand"> -->


<!-- Navigation -->

		<!-- Container  Warp -->
    <div class="container-wrap">

												<!-- Start Slide -->
                        <aside id="fh5co-hero">
                            <div class="flexslider">
                              <ul class="slides">
                                  @if ($slide->count() > 0 )
                                @foreach ($slide as $slide)
                                    
                                 <li style="background-image: url(images/slide/{{$slide->photo}});">
                                   <div class="overlay-gradient"></div>
                                   <div class="container-fluid ">
                                     <div class="row">
                                       <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                         <div class="slider-text-inner">
                                           <h1>{{$slide->title}}</h1>
                                          <h2>{{$slide->subtitle}}<a href="" target="_blank"></a></h2>
                                          <p><a class="btn btn-primary btn-demo" href="/{{$slide->url}}"></i> View </a> <a class="btn btn-primary btn-learn"> Learn More </a></p>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </li>

                                 @endforeach
                                 @else
                                 <li style="background-image: url(images/slide/defaultSlide.png);">
                                  <div class="overlay-gradient"></div>
                                  <div class="container-fluid ">
                                    <div class="row">
                                      <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                        <div class="slider-text-inner">
                                          <h1>No Title</h1>
                                         <h2>No Subtitle<a href="" target="_blank"></a></h2>
                                         <p><a class="btn btn-primary btn-demo" href="/"></i> View </a> <a class="btn btn-primary btn-learn"> Learn More </a></p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                 @endif



                               {{--   <li style="background-image: url(images/img_bg_2.jpg);">
                                   <div class="overlay-gradient"></div>
                                   <div class="container-fluid">
                                     <div class="row">
                                       <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                         <div class="slider-text-inner">
                                           <h1>Facebook Open-Sources </h1>
                                          <h2>Taking powerful artificial intelligence software and making it open source, so anyone in the world can use it<a href="" target="_blank"></a></h2>
                                          <p><a class="btn btn-primary btn-demo" href="#"></i> View </a> <a class="btn btn-primary btn-learn">Learn More</a></p>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li style="background-image: url(images/img_bg_3.jpg);">
                                   <div class="overlay-gradient"></div>
                                   <div class="container-fluids">
                                     <div class="row">
                                       <div class="col-md-6 col-md-offset-3 slider-text">
                                         <div class="slider-text-inner text-center">
                                           <h1 style="color:white">What Would You Like To Learn?</h1>
                                          <h2 style="color:white">Computer engineer with tester examining green motherboard with processor, chips and capacitors Stock </h2>
                                          <p><a class="btn btn-primary btn-demo" href="#"></i> View</a> <a class="btn btn-primary btn-learn">Learn More</a></p>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <li style="background-image: url(images/img_bg_4.jpg);">
                                   <div class="overlay-gradient"></div>
                                   <div class="container-fluid">
                                     <div class="row">
                                       <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                         <div class="slider-text-inner">
                                           <h1 style="color:red">I Love to Tell My Story</h1>
                                          <h2 style="color:white">Engineer Is MyLife <a href="" target="_blank"></a></h2>
                                          <p><a class="btn btn-primary btn-demo" href="#"></i> View </a> <a class="btn btn-primary btn-learn">Learn More</a></p>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </li>	  --}}  	



                                </ul>
                              </div>
                          </aside>
                      
                      
                                                        <!--  End Slide -->
                      
          