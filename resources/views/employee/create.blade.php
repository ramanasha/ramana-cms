@extends('layout.dashboard')
@section('content')

<h1>Add Employee</h1>
<br><br>
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
<form action="{{route('employee.store')}}" method="post">
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
        </div>
    </div>
    <br><br>
    <div class="col-3" >
    <input type="submit" name="insert" id="insert" value="Add Employee" class="btn btn-success btn-block">
    </div>
        
    
</form>

@endsection