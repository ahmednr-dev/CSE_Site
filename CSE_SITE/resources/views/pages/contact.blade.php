@extends('layouts.default')


@section('title','| Contact Us')



@section('content')
    


<div class="container-wrap">
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
               <li style="background-image: url(images/contact-us.jpg);">
                   <div class="overlay-gradient"></div>
                   <div class="container-fluids">
                       <div class="row">
                           <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                               <div class="slider-text-inner text-center">
                               
                               </div>
                           </div>
                       </div>
                   </div>
               </li>		   	
              </ul>
          </div>
    </aside>		
    <div id="fh5co-contact">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Contact us</h2>
                <p>
                    From here you will get the answers you want quickly and easily. Feel free to choose 
                    
                    the most convenient channel that best serves your need whether it is regarding a new subscription or a technical support issue.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box">
                <h3>Our Address</h3>
                <ul class="contact-info">
                    <li><i class="icon-location4"></i>Egypt - Minia Governorate - Minia University        </li>
                    <li><i class="icon-phone3"></i>Telephone:086/23342601 Fax:086/23342601	</li>
                    <li><i class="icon-location3"></i><a href="#">info@yoursite.com</a></li>
                    <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
                </ul>
            </div>
            <div class="col-md-7 col-md-push-1 animate-box">

                    <form action="{{action('pages\ContactController@dosend')}}" method="POST">
                            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name"  name='name'>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea  class="form-control" id="" cols="30" rows="7" placeholder="Message" name="messages"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-modify">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END container-wrap -->






@endsection