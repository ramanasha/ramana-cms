@extends('layout.dashboard')
@section('content')
<h1>Edit Student</h1>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<form action="{{route('student.update',$student->id)}}" method="post">
@csrf
@method('put')
    <div class="form-group">
    <label class=" control-label" for="first_name">First Name :</label>
        <input type="text" name="first_name" class="form-control"  value="{{$student->first_name}}">
    </div>
    <div class="form-group">
    <label class=" control-label" for="last_name">Last Name :</label>
        <input type="text" name="last_name" class="form-control"  value="{{$student->last_name}}">
    </div>
    <label class=" control-label" for="user_id">User ID :</label>
        <input type="text" name="user_id" class="form-control"  value="{{$student->user_id}}">
    </div>
    <label class=" control-label" for="grade_id">User ID :</label>
        <input type="text" name="grade_id" class="form-control"  value="{{$student->grade_id}}">
    </div>
    <br>
    <div class="form-group">
        <input type="submit" name="insert" id="insert" value="Update Student" class="btn btn-success btn-block">
    </div>
    
</form>

@endsection