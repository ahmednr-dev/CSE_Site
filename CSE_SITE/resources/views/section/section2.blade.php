
                                                          
                                                              <hr class="style2">
                                                              <!-- FontAwosme icon  <i class="fa fa-skyatlas" aria-hidden="true"></i> -->

                                                            <!-- Div Work Gallary -->
                                                      

                                                                <div id="fh5co-work" class="fh5co-light-grey" >
                                                                        
                                                                        <div class="row animate-box">
                                                                            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                                                                                <h1>@lang('app.GalleryProjects')</h1>
                                                                                <p> @lang('app.galeryBody')</p>
                                                                            </div>
                                                                        </div>

                                                                        @if ($blogs->count() > 0)
                                                                        @foreach ($blogs as $blogs)
                                                                        <div class="row">
                                                                            <div class="col-md-4 text-center animate-box" >

                                                                                 
                                                                      
                                                                            <a href="#" class="work"  style="background-image: url(/images/blogs/{{$blogs->photo}});">
                                                                                    <div class="desc">
                                                                                         <h3>{{$blogs->title}}</h3>
                                                                                        <span>{{ substr(strip_tags($blogs->body), 0, 30)}}</span>
                                                                                    </div>
                                                                                </a>
                                                                          
                                                                         
                                                                            </div> 
                                                                            @endforeach 
                                                                        @else
                                                                        <div class="row">
                                                                                <div class="col-md-4 text-center animate-box" >
    
                                                                                     
                                                                          
                                                                                <a href="#" class="work"  style="background-image: url(/images/default.png);">
                                                                                        <div class="desc">
                                                                                             <h3>Title</h3>
                                                                                            <span>Body</span>
                                                                                        </div>
                                                                                    </a>
                                                                              
                                                                             
                                                                                </div> 
                                                                        @endif
                                                                      

                                                                            <button type="button" class="btn btn-info col-md-2 col-md-offset-5 text-center fh5co-heading" style="margin-right:500px">More</button>

                                                                        </div>   </div>
                                                                         
                                                                                                                            <!-- End Work Gallary -->

                                                                                                                  