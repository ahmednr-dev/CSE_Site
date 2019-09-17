@extends('layouts.admin')


@section('title',' Slide Edit  | CSE ')
        



@section('content')
    



    <div class="contaier">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">
                                <h1>Edit Slide</h1>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">

                               <form enctype="multipart/form-data" action="\dashboard\slide-update\{{$slide->id}}" method="post">
                                @csrf
                                {{ method_field('put')}} 
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name='title' class="form-control" id="recipient-name" value="{{$slide->title}}">
                            </div>
                
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Sub-title:</label>
                                <input type="text" name="subtitle" class="form-control" id="recipient-name" value="{{$slide->subtitle}}">
                              </div>

                              <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Link:</label>
                                    <input type="text" name="url" class="form-control" id="recipient-name">
                                  </div>
                                  
                              <label for="exampleFormControlInput" style="margin:10px">Featured Image</label>
                              <input type="file" name="photo" class="form-control">
                
                                                                                                                         
                <button type="submit" class="btn btn-primary" style="margin-left:20px">Update</button>
                <a href="/dashboard/slide" class="btn btn-denger" style="margin-left:20px">Cancel</a>
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