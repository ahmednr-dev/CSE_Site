@extends('layouts.default')

@section('title','News')

@section('content')
   

<div class="container">

        @if (!auth::guest())
                    <!-- Button  -->
        <div class="col-md-6 col-md-offset-3 text-center heading-section" style="margin-top:20px;">
                <a class="btn btn-primary" href="/blog/create"> @lang('app.Create News')</a> </h1>           
        </div>
                     <!-- Button  -->
        @endif

    <!-- if number of event more than 0  -->
@if ($blogs->count() > 0 )

@foreach ($blogs as $event)

<div id="fh5co-blog" style="display:inline-block">
        <div class="row" >
            <div class="col">
                <div class="fh5co-blog animate-box">
                <a href="#" class="blog-bg" style="background-image: url(/images/blogs/{{$event->photo}});"></a>
                    <div class="blog-text">
                        <span class="posted_on">{{$event->created_at}}</span>
                        <h3><a  href="/blog/{{$event->slug}}">{!!$event->title!!}</a></h3>
                        <p>{{$event->title,200}}</p>
                        <ul class="stuff">
                        <li><a href="/blog/{{$event->slug}}">Read More<i class="icon-arrow-right22"></i></a></li>
                        </ul>
                    </div> 
                </div>
            </div>
  
         

        </div> 
    </div> 

@endforeach

{{$blogs->links() }}


@else
 <!-- IF event Not Found   -->
            
            
                <div class="col-md-6 col-md-offset-3 text-center heading-section" style="margin-top:50px;margin-bottom:50px">
                    <strong>Ops</strong> No News           
            </div>
      


@endif

</div> <!-- Container-warap -->
@endsection

  