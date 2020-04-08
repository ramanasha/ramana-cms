@extends('layout/dashboard')
@section('content')
<h2>Edit Employee Details</h2>
<br><br>
<form action="{{route('employee.update',$employee->id)}}" method="post">
@csrf
@method('put')
    <div class="form-group">
        <div class="row">
        <div class="col-6">
            <label class=" control-label" for="first_name">First Name :</label>
            <input type="text" name="first_name" class="form-control"  value='{{$employee->first_name}}'>
        </div>
        <div class="col-6">
            <label class=" control-label" for="last_name">Last Name :</label>
            <input type="text" name="last_name" class="form-control"  value='{{$employee->last_name}}'>
        </div>
        </div>
    </div>
    <br>
    <div class="col-3">
        <input type="submit" name="insert" id="insert" value="Update Employee" class="btn btn-success btn-block">
    </div>
</form>
@endsection