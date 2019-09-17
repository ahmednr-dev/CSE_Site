@extends('layouts.admin')


@section('title','  Registerd Edit  | CSE ')
      


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
     
                    <form action="\dashboard\register-update\{{$user->id}}" method="POST">
                                @csrf
                               {{ method_field('put')}} 

                        <div class="form-group">
                                                              
                     <label for="formGroupExampleInput">Name</label>
                    <input type="text" value="{{$user->name}}" class="form-control" id="formGroupExampleInput" name="name">
                                   
                  <label for="exampleInputEmail1">Email address</label>
                 <input type="email" value="{{$user->email}}" class="form-control " id="exampleInputEmail1" name="email" >
                                    
                 <label for="formGroupExampleInput">Password</label>
                <input type="password" class="form-control " id="formGroupExampleInput" name="password">
                                                              
                <button type="submit" class="btn btn-primary" style="margin-left:20px">Update</button>
                <a href="/dashboard/register" class="btn btn-denger" style="margin-left:20px">Cancel</a>
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