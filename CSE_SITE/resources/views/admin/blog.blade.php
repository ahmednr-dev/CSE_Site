<?php

use App\Blog;


$blogLink = Blog::where('type','news')->paginate(5);
$eventLink = Blog::where('type','events')->paginate(5);
?>

@extends('layouts.admin')


@section('title','POSTS CONTROL | CSE')
  
@section('content')
    

                      <!--Blog-->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Blogs List
           
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
              @endif
        </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> Name </th> <th> body  </th> <th> Degree </th>  <th> Show </th> 
              </thead>
              <tbody>
                  @foreach ($blogs as $blogs)
                <tr>                  
                  <td> {{ $blogs->title}}  </td>
                  <td>   {!!str_limit($blogs->body,50)!!} </td>
                  <td> <img src="/images/blogs/{{ $blogs->photo}}" style="width:100px"> </td>
                  <td> <a class="btn btn-primary" href="/blog/{{$blogs->slug}}">Go</a></td>
                </tr>
                @endforeach
             
              </tbody>
          
            </table>
       
          </div>
          {{ $blogLink->links() }}
        </div>
      </div>
    </div>
  </div>
                       <!-- End Blog -->

                       
                      <!-- Events -->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Events List
           
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
              @endif
          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Edit</button>
        </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th> Name </th> <th> body  </th> <th> Degree </th>  <th> Show </th> 
              </thead>
              <tbody>
                  @foreach ($events as $events)
                <tr>                  
                  <td> {{ $events->title}}  </td>
                  <td>   {!!str_limit($events->body,50)!!} </td>
                  <td> <img src="/images/events/{{ $events->photo}}" style="width:100px"> </td>
                  <td> <a class="btn btn-primary" href="/event/{{$events->slug}}">Go</a></td>
                </tr>
                @endforeach
             
              </tbody>
          
            </table>
       
          </div>
          {{ $eventLink->links() }}
        </div>
      </div>
    </div>
  </div>
                       <!-- -->
                   
@endsection


@section('scripts')
    
@endsection 