  @extends('layouts.default')
  @section('content')

<div class="container-wrap">

<form enctype="multipart/form-data" action=" {!! route('blog.update',['blog'=>$blogs]) !!}" method="POST" >

          @method('put')
          @include('blog.form')
          
</form>
    </div> 

@endsection



