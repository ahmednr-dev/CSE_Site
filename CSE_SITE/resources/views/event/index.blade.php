@extends('layouts.default')

@section('title','Event')

@section('content')
   

<div class="container">

        @if (!auth::guest())
                    <!-- Button  -->
        <div class="col-md-6 col-md-offset-3 text-center heading-section" style="margin-top:20px;">
                <a class="btn btn-primary" href="/event/create"> @lang('app.Create News')</a> </h1>           
        </div>
                     <!-- Button  -->
        @endif

    <!-- if number of event more than 0  -->
@if ($events->count() > 0 )

@foreach ($events as $event)

<div id="fh5co-blog" style="display:inline-block">
        <div class="row" >
            <div class="col">
                <div class="fh5co-blog animate-box">
                <a href="#" class="blog-bg" style="background-image: url(/images/events/{{$event->photo}});"></a>
                    <div class="blog-text">
                        <span class="posted_on">{{$event->created_at}}</span>
                        <h3><a  href="/event/{{$event->slug}}">{!!$event->title!!}</a></h3>
                        <p>{{$event->title,200}}</p>
                        <ul class="stuff">
                        <li><a href="/event/{{$event->slug}}">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </div>
  
         

        </div> 
    </div> 

@endforeach

{{$events->links() }}


@else
 <!-- IF event Not Found   -->
            
            
                <div class="col-md-6 col-md-offset-3 text-center heading-section" style="margin-top:50px;margin-bottom:50px">
                    <strong>Ops</strong> No Event           
            </div>
      


@endif

</div> <!-- Container-warap -->
@endsection

  