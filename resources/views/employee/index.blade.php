@extends('layout.dashboard')
@section('content')

@if(session()->get('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div><br>
@endif

<h2>Employee Details</h2>
<br>
<table class="table table-striped table-sm">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Action</th>
@auth<th>Delete</th>@endauth
</tr>
@foreach($employees as $employee)
<tr>
<td>{{$employee->id}}</td>
<td>{{$employee->first_name}}</td>
<td>{{$employee->last_name}}</td>
<td>
    <a  title="View Employees" href="{{route('employee.show',$employee->id)}}"><i class="fas fa-info-circle fa-lg"></i></a>
   @auth <a  title="Edit Employees" href="{{route('employee.edit',$employee->id)}}"><i class="fas fa-edit fa-lg"></i></a>@endauth
   @auth
<td>
    <form action="{{route('employee.destroy',$employee->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
    </form>
</td>
@endauth
</tr>
@endforeach
</table>
@auth
<div align="right">
    <button  class="btn btn-secondary"><a style="color:White" href="{{route('employee.create')}}">Add New</a></button>
</div>
@endauth
@endsection
