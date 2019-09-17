
@extends('layouts.admin')


@section('title','Slide CONTROL | CSE')
  


@section('content')
    
 <!-- Model Bootstrap Code -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Slide</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
    
            <div class="modal-body">
    
              <form enctype="multipart/form-data" action="/dashboard/save-slide" method="post">
                    @csrf
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Title:</label>
                  <input type="text" name='title' class="form-control" id="recipient-name">
                </div>
    
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Sub-title:</label>
                    <input type="text" name="subtitle" class="form-control" id="recipient-name">
                  </div>

                  <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Link:</label>
                        <input type="text" name="url" class="form-control" id="recipient-name">
                      </div>


                  <label for="exampleFormControlInput" style="margin:10px">Featured Image</label>
                  <input type="file" name="photo" class="form-control">
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">SAVE</button>
            </div>
    
          </form>
          </div>
        </div>
      </div>
      <!-- Model Bootstrap Code -->
    

                      <!-- Slide -->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Slide List

                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Add User</button>

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
                <th> title </th> <th> subtitle  </th> <th> Link </th> <th> photo </th>  <th> edit </th> <th> Delete </th>
              </thead>
              <tbody>
                  @foreach ($slide as $slides)
                <tr>                  
                  <td> {{ $slides->title}}  </td>
                  <td>   {!!str_limit($slides->subtitle,50)!!} </td>
                  <td> {{ $slides->url}}  </td>
                  <td> <img src="/images/slide/{{ $slides->photo}}" style="width:100px"> </td>
                  <td> <a class="btn btn-primary" href="/dashboard/slide-edit/{{$slides->id}}">Edit</a></td>
                
                
                  <td>
                
                        <form action="/dashboard/slide-delete/{{$slides->id}}" method="post">
                        @csrf
                       @method('DELETE')
                          <button class="btn btn-danger" href="">Delete</button> 
      
                        </form>
                      
                      </td>
                </tr>
                
                @endforeach
             
              </tbody>
          
            </table>
       
          </div>
     
        </div>
      </div>
    </div>
  </div>
                       <!-- End slide -->

                   
@endsection


@section('scripts')
    
@endsection 