<!--
    
    Method POST 

    Create New Posts 

    only For Admin 

     Request Controller 

     store($request)

-->

@extends('layouts.default')
@section('content')

    <!-- Container  Warp -->
    <div class="container-wrap">


<!-- enctype="multipart/form-data" to uploadfile --> 
    <form enctype="multipart/form-data" action="{{route('event.store')}}" method="POST" >
  @csrf <!-- Skip error page expierd -->
  
  <input type="text" name='type' value="events" hidden>

   <!-- Title -->
   <div class="form-group">
   <label for="exampleFormControlInput1" style='margin:10px'>@lang('app.Title') </label>
    <input type="text" class="form-control " style='width:400px;margin:10px' name="title" >
    </div>
      


     <!-- TextArea -->
    <div class="form-group">
      <label for="exampleFormControlTextarea1" style="margin:10px">@lang('app.Subject')</label>
      <textarea class="form-control" rows="10" name="body" style=''></textarea>
       <!-- CK Editor-->
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
     <script>
      CKEDITOR.replace( 'body' );
      </script>
      <!-- CK Editor-->

    </div>
  
    <!-- Image -->
    <label for="exampleFormControlInput" style="margin:10px">@lang('app.Featured Image')</label>
    <input type="file" name="photo" style='width:900px;margin:10px' class="form-control">
     <!-- Submit -->
     <button type="submit" class="btn btn-primary" style="margin:20px">@lang('app.Submit')</button>

 
</form>


    </div> <!-- Container Wrap -->


@endsection


