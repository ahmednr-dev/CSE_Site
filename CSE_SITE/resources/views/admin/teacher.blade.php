@extends('layouts.admin')


@section('title','  Teacher | CSE ')



@section('content')
    
 <!-- Model Bootstrap Code -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Links</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <form enctype="multipart/form-data" action="/dashboard/save-teacher" method="post">
                @csrf
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
          <h4 class="card-title">Teachers List
            
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
                <th> Name </th> 
                <th> Photo  </th> 
                <th> Degree </th> 
                <th> Edit </th> 
                <th> Delete </th> 
              </thead>


              <tbody>
                  @foreach ($teachers as $teachers)
                <tr> 

            
                      
                  
                  <td> {{ $teachers->name}}  </td>
                  <td>   {{ $teachers->photo}}  </td>
                  <td> {{ $teachers->degree}}  </td>
                  <td> 
                      <a class="btn btn-primary" href="/dashboard/edit-teacher/{{$teachers->id}}">Edit</a>
                </td>
                  <td>  
                  <form action="/dashboard/teacher-delete/{{$teachers->id}}" method="post">
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