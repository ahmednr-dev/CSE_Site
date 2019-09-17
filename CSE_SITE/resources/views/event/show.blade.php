


@extends('layouts.default')

@section('title','| '. $events->title)


@section('content')

<div class="container">

<div id="fh5co-work">
        <div class="row">
            <div class="col-md-8">
                <a href="{{asset('/images/events/'.$events->photo)}}" class="image-popup img-portfolio-detail">
                    <img src="{{asset('/images/events/'.$events->photo)}}" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-4 fh5co-project-detail">
            <h2 class="fh5co-project-title">{{$events->title}}</h2>
              <!--  <span class="fh5co-project-sub">Sub title</span> -->

                <p>{!!$events->body!!}</p>

            <!-- IF I Need Add Another Thing 
                <div class="fh5co-project-service">
                    <h3>Services</h3>
                    <ul>
                        <li>Package Design</li>
                        <li>Printing</li>
                        <li>Branding</li>
                    </ul>
                </div>
                -->


            </div>
        
            <!-- Hide Button if you not Same user you posted or if you not user -->
            @if (!auth::guest())
                                                    
            <a href="/event/{{$events->id}}/edit">
            <button type="button" class="btn btn-primary" >Edit</button>
            </a>

 

    
            <form action="{!! action('pages\EventController@destroy',$events->id)!!}}" method="post">
                <!-- Add Delete Method -->
                <input name="_method" type="hidden" value="delete">
            <!-- Skip error page expierd -->
            @csrf                          
            <button type="submit" class="btn btn-danger">
                Delete 
            </button>
            </form>
    
       

            @endif 
      
 
                                 <!-- End Edit & Delete --> 
        </div>
   

    </div>

  


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

</div>

@endsection

