
<div class="container-wrap">

<!-- If i have any Error Acess to Global var errors -->
@if ($errors->any()) 
@foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                    <li>{{$error}}</li>
            </div>
@endforeach
@endif

<!-- If Login Is Sucessufly 

    Use Session 

    Pass From Controller by with function 
--> 

@if (session('success'))
            <div class="alert alert-success">
                    {{ session('success') }}
            </div>
@endif

@if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
@endif

</div>