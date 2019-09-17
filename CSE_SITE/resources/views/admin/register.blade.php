@extends('layouts.admin')


@section('title',' Registerd Roles  | CSE')


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

          <form action="/dashboard/add-user" method="post">
                @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">username:</label>
              <input type="text" name='name' class="form-control" id="recipient-name">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">E-Mail:</label>
                <input type="email" name="email" class="form-control" id="recipient-name">
              </div>
        
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Password:</label>
                  <input type="password" name="password" class="form-control" id="recipient-name">
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



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">  User Edit </h4>

          <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Add User</button>

          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
          @endif
        </div>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                  <th> id </th> 
                <th> Name </th> 
                <th>Email </th> 
                <th> Edit </th> 
                <th > Delete </th>
              </thead>


              <tbody>


                    @foreach ($users as $data)
    

                <tr> 
                    <td>  {{$data->id}}  </td>
                  <td>  {{$data->name}}  </td>
                  <td>   {{$data->email}}  </td>

                  <!--  <td>   { {$data->usertype}}  </td>

                      under test if there are user and admin
                  
                  -->
                <td>  <a class="btn btn-primary" href="/dashboard/register-edit/{{$data->id}}">Edit</a>  </td>


                <td>
                
                  <form action="/dashboard/register-delete/{{$data->id}}" method="post">
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
    


@endsection


@section('scripts')
    
@endsection