    @extends('layouts.default')

    @section('title','| Gallery')

    @section('content')
                        

    <div class="container">


                        <!-- if number of blogs more than 0  -->
                    @if ($blogs->count() > 0 )

                    @foreach ($blogs as $blog)

                    <div id="fh5co-blog" style="display:inline-block">
                            <div class="row" >
                                <div class="col text-center">
                                    <div class="fh5co-blog animate-box">
                                    <a href="#"  class="work" style="background-image: url(/images/blogs/{{$blog->photo}});">

                                        <div class="desc">
                                                <h3>{{$blog->title}}</h3>
                                                <span>{{ substr(strip_tags($blog->body), 0, 50)}}</span>
                                            </div>
                                    
                                    </a>
                                        <div class="blog-text">
                                            <span class="posted_on">{{$blog->created_at}}</span>
                                            <h3><a  href="/blog/{{$blog->slug}}">{!!$blog->title!!}</a></h3>
                                                                                       
                                        </div> 
                                    </div>
                                </div>
                    
                            

                            </div> 
                        </div> 

                    @endforeach

                    {{$blogs->links() }}


                    @else
                    <!-- IF post Not Found   -->
                                
                    <div class="col-md-6 col-md-offset-3 text-center heading-section" style="margin-top:50px;margin-bottom:50px">
                        <strong>Ops</strong> No Photos           
                </div>
          

                    @endif

                    </div> <!-- Container-warap -->
                    @endsection

                    