
@extends('layouts.default')
@section('content')

<div class="container-wrap">
  
<form enctype="multipart/form-data" action="{{route('blog.store')}}" method="POST">

          @include('blog.form')

</form>

</div> 


@endsection


