
@extends('layouts.admin')


@section('title',' Dashboard | CSE')


@section('content')
    




<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Welcome Admin 
          </h4>
        </div>

        <div class="card-body">
          <div class="table-responsive">
           
            
<button class="btn btn-default">Default</button>
<button class="btn btn-primary">Primary</button>
<button class="btn btn-info">Info</button>
<button class="btn btn-success">Success</button>
<button class="btn btn-warning">Warning</button>
<button class="btn btn-danger">Danger</button>


<!-- Button trigger modal -->
<button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">
    Notes  </button>
  
  <!-- Modal Core -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h6 class="modal-title" id="myModalLabel" >Notes</h6>
        </div>
        <div class="modal-body">
        
          Hello AhmadNour

          This Notes For You

          Thanks For Your Time


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-info btn-simple">Save</button>
        </div>
      </div>
    </div>
  </div>
                     <!-- Button Modal End -->
    			
      </div>
    </div>

  </div>
    


@endsection


@section('scripts')
    
@endsection