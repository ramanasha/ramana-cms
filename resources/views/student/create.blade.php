@extends('layout.dashboard')
@section('content')
<h1>Add Student</h1>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<form action="{{route('student.store')}}" method="post">
@csrf
<div class="form-group">
        <div class="row">
            <div class="col-6">
                <label class=" control-label" for="first_name">First Name :</label>
                <input type="text" name="first_name" class="form-control"  placeholder="First Name" required>
            </div>
            <div class="col-6">
                <label class=" control-label" for="last_name">Last Name :</label>
                <input type="text" name="last_name" class="form-control"  placeholder="Last Name" required>
            </div>
            <div class="col-6">
                <label class=" control-label" for="user_id">User ID :</label>
                <input type="text" name="user_id" class="form-control"  placeholder="User ID" required>
            </div>
            <div class="col-6">
                <label class=" control-label" for="grade_id">User ID :</label>
                <input type="text" name="grade_id" class="form-control"  placeholder="Grade ID" required>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-3" >
        <input type="submit" name="insert" id="insert" value="Add Student" class="btn btn-success btn-block">
    </div>
</form>

@endsection