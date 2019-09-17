

   <!-- Title -->
   <div class="form-group">
    <label for="exampleFormControlInput1" style='margin:10px'> @lang('app.Title') </label>
     <input type="text" class="form-control " style='width:400px;margin:10px' name="title"  value="{{ old('title') ?? $blogs->title}}" >
</div>
           <!-- Type news or event --> 
     <input type="text" name='type' value="news" hidden>
 
      <!-- TextArea -->
     <div class="form-group">
       <label for="exampleFormControlTextarea1" style="margin:10px">@lang('app.Subject')</label>
       <textarea class="form-control" rows="10" name="body" >{{ old('body') ?? $blogs->body}}</textarea>
        <!-- CK Editor-->
       <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
       CKEDITOR.replace( 'body' );
       </script>
       <!-- CK Editor-->
</div>
   
     <!-- Image -->
     <label for="exampleFormControlInput" style="margin:10px;display:block">@lang('app.Featured Image') </label>
     <img src="{{ old('photo') ?? asset('images/blogs/'.$blogs->photo)}}" class="img-fluid" alt="Responsive image">
     <input type="file" name="photo" style='width:900px;margin:10px' class="form-control">
      <!-- Submit -->
  <button type="submit" class="btn btn-primary" style="margin:20px">@lang('app.Submit')</button>

        @csrf   

