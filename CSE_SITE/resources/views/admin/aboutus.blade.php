@extends('layouts.admin')


@section('title',' About Us | CSE')



@section('content')
    
 <!-- Model Bootstrap Code -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New About Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <form enctype="multipart/form-data" action="/dashboard/save-aboutus" method="post">
                @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Title:</label>
              <input type="text" name='title' class="form-control" id="recipient-name">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Sub-title:</label>
                <input type="text" name="subtitle" class="form-control" id="recipient-name">
              </div>
              <label for="exampleFormControlInput" style="margin:10px">Featured Image</label>
              <input type="file" name="photo" class="form-control">

            <div class="form-group">
              <label for="message-text" class="col-form-label">Description:</label>
              <textarea name="description" class="form-control" id="message-text"></textarea>
            </div>
         
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

                      <!-- -->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">About Us

            
          
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
                <th> title </th> 
                <th>subtitle </th> 
                <th> description </th> 
                <th> images </th> 
                <th> Edit </th> 
                <th> Delete </th> 
              </thead>


              <tbody>
                  @foreach ($about as $data)
                <tr> 

            
                      
                  
                  <td> {{ $data->title}}  </td>
                  <td>   {{ $data->subtitle}}  </td>
                  <td>  {{ $data->description}}  </td>
                  <td>   {{ $data->photo}}  </td>
                  <td> 
                      <a class="btn btn-primary" href="/dashboard/edit-about/{{$data->id}}">Edit</a>
                </td>
                  <td>  
                  <form action="/dashboard/about-delete/{{$data->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-denger">  Delete </button>
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
                       <!-- -->
                   
@endsection


@section('scripts')
    
@endsection 