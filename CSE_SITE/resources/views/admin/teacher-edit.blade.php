@extends('layouts.admin')


@section('title',' Registerd Edit  | CSE')
       



@section('content')
    



    <div class="contaier">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">
                                <h1>Edit Teacher</h1>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">

                               <form enctype="multipart/form-data" action="\dashboard\teacher-update\{{$teacher->id}}" method="post">
                                @csrf
                                  {{ method_field('put')}} 
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Name:</label>
                                <input type="text" name='name' class="form-control" id="recipient-name">
                              </div>
                  
                              <div class="form-group">
                                  <label for="recipient-name" class="col-form-label">Degree</label>
                                  <input type="text" name="degree" class="form-control" id="recipient-name">
                              
                              </div>
                  
                              <label for="exampleFormControlInput" style="margin:10px">Photo</label>
                              <input type="file" name="photo" class="form-control">
                           
                          </div>
                          <div class="modal-footer">
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