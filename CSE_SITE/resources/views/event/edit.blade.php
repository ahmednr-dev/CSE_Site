  <!-- 
    For Edit Use Put Method 

    Add PUT Method 
  <input name="_method" type="hidden" value="PUT">

-->


@extends('layouts.default')

@section('content')

    <!-- Container  Warp -->
    <div class="container-wrap">



<form enctype="multipart/form-data"   action=" {!! route('event.update',['event'=>$event]) !!}" method="POST" >
  @csrf <!-- Skip error page expierd -->

    <!-- Add PUT Method -->
    <input name="_method" type="hidden" value="PUT">

   <!-- Title -->
   <div class="form-group">
   <label for="exampleFormControlInput1" style='margin:10px'>Title </label>
   <input type="text" class="form-control " style='width:400px;margin:10px' name="title" value="{{$event->title}}">
    </div>
      

     <!-- TextArea -->
    <div class="form-group">
      <label for="exampleFormControlTextarea1" style="margin:10px">Subject</label>
    <textarea class="form-control" rows="10" name="body" style=''>{!!$event->body!!}</textarea>
       <!-- CK Editor-->
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     <script>
      CKEDITOR.replace( 'body' );
      </script>
      <!-- CK Editor-->

    </div>
  
 
<!-- Upload Photo -->
<img src="{{asset('images/events/'.$event->photo)}}" class="img-fluid" alt="Responsive image">
        
<input type="file" name="photo">

<!-- End Upload Photo -->


     <!-- Submit -->
<input type="submit" class="btn btn-primary" value="Submit" style="margin:20px" name="Update">

 
</form>


    </div> <!-- Container Wrap -->


@endsection



