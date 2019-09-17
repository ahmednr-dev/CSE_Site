@extends('layouts.admin')


@section('title','About Us Edit | CSE')
      



@section('content')
    



    <div class="contaier">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">
                                <h1>Edit User</h1>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">

                               <form enctype="multipart/form-data" action="\dashboard\about-update\{{$about->id}}" method="post">
                                @csrf
                                {{ method_field('put')}} 
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name='title' class="form-control" id="recipient-name" value="{{$about->title}}">
                            </div>
                
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sub-title:</label>
                                <input type="text" name="subtitle" class="form-control" id="recipient-name" value="{{$about->subtitle}}">
                              </div>
                              <label for="exampleFormControlInput" style="margin:10px">Featured Image</label>
                              <input type="file" name="photo" class="form-control">
                
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Description:</label>
                              <textarea name="description" class="form-control" id="message-text">{{$about->description}}</textarea>
                            </div>
                                                                                                        
                <button type="submit" class="btn btn-primary" style="margin-left:20px">Update</button>
                <a href="/dashboard/teacher-us" class="btn btn-denger" style="margin-left:20px">Cancel</a>
         </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  </div>
    



@endsection


@section('scripts')
    
@endsection