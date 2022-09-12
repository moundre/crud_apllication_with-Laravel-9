@extends('students.layout')
@section('content')
<div class="container">
    <div class="card" style="margin: 10%; with:40px;">
    <div class="card-header text-center bg-info">Connexion</div>
    <div class="card-body">
        <form action="">
            {!! csrf_field ()!!}
            
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" class="btn btn-info" value="Login"><br>
          </form>
    </div>
    </div>
</div>
@endsection