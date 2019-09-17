<?php 

use App\Teacher;

$teacher = Teacher::all();

?>

@extends('layouts.default')


@section('content')


@section('title','| Teachers')


<div class="container">


    <!-- if number of blogs more than 0  -->

            <aside id="fh5co-hero">
                    <div class="row animate-box teachers">
                            <div class="col-md-6 col-md-offset-3 text-center heading-section">
                                <h1 > Our Teachers</h1>
                                <p><!-- --></p>
                            </div>
                        </div>                             
                <div class="flexslider">    
                    <ul class="slides">
                       <li style="background-image: url(images/teachers-group.jpg);">
                           <div class="overlay-gradient"></div>
                       </li>		   	
                      </ul>
                  </div>
            </aside>	

	<div id="fh5co-work">
			<div class="row" >
              
                    @foreach ($teacher as $teacher)
				<div class="col-md-4 text-center animate-box" >
                       
					<a href="#" class="work" style="background-image: url(images/teacher/{{$teacher->photo}});">
					            </a>
                    <h3>{{$teacher->name}}</h3>
                    <span>{{$teacher->degree}}</span>
                  
                </div>
                @endforeach

				
				
            
            </div>
    
        </div>
        

</div> <!-- Container-warap -->
@endsection

