														<!-- Blog Last News -->
                                                        
                                                      

                                                        <div id="fh5co-blog" class="blog-flex">

                                                                                         <!-- Heading Text -->
                                                                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                                                                        <h1>@lang('app.UpcomingEvents')</h1>
                                                                        <p>@lang('app.eventBody')</p>
                                                                </div>
                                                                                           <!-- Heading Text -->

                                                                                            <!-- Image Featured -->
                                                           @if ($blogs->count() > 0 )             
                                                        <div class="featured-blog" style="background-image: url(/images/blogs/{{$blogs->first()->photo}}">
                                                            @else 
                                                            <div class="featured-blog" style="background-image: url(/images/default.png">
                                                            @endif
                                                                    <div class="desc-t">
                                                                        <div class="desc-tc">
                                                                            <span class="featured-head" style="color:blue">Featured Posts</span>

                                                                   
                                                                        @if ($blogs->count()> 0)
                                                                        <h3><a href="/blog" style="color:orange">{!!str_limit($blogs->first()->title,100)!!}</a></h3>
                                                                        @else
                                                                        <h3><a href="/blog" style="color:orange">No Title</a></h3>
                                                                        @endif
                                                                        <span><a href="/blog" type="button" class="btn btn-warning">Learn More</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                               <!-- Image Featured -->


                                                                <!-- Last Posts -->
                                                                <div class="blog-entry fh5co-light-grey">
                                                                    <div class="row animate-box">
                                                                        <div class="col-md-12">
                                                                            <h2>Last Posts</h2>
                                                                        </div>
                                                                    </div>
                         
                                                                    <div class="row">
                                                                        <div class="col animate-box">                                                                                
                                                                                                                          <!-- Last Posts -->                                               
                                                                                <div class="desc">
                                                                                    @if ($blogs->count() > 0)
                                                                                        @foreach ($blogs as $blogs)
                                                                                                    <span class="img" style="background-image: url(images/blogs/{{$blogs->photo}});"></span> 
                                                                                                    <h3>{{$blogs->title,100}}</h3>
                                                                                                    <span class="cat"> body  here </span>
                                                                                        @endforeach
                                                                                        @else

                                                                                        <span class="img" style="background-image: url(images/default.png"></span> 
                                                                                        <h3>none title</h3>
                                                                                        <span class="cat"> body  here </span>
                                                                                        @endif
                                                                                                                              
                                                                                </div>
                                                                                  <!-- Last Posts -->
                                                                         
                                                                        </div>
                                                                   
                                                                            
                                                                        </div>   </div>    </div>    </div>
                                                      

                                        <!-- End Blog -->


                                    </div><!-- END container-wrap -->
                                </div>