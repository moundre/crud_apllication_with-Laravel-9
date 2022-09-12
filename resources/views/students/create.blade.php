@extends('students.layout')
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header" style>Create New Student</div>
    <div class="card-body">
        <form action="{{url('student')}}" method="POST">
            {!! csrf_field ()!!}
            
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label>Address</label><br>
            <input type="text" name="address" id="address" class="form-control"><br>
            <label>Mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" class="btn btn-success" value="Save"><br>
          </form>
    </div>
</div>

@endsection