
@extends('layout.dashboard')
@section('content')

@if(session()->get('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div><br>
@endif
<h2>Student Details</h2>
<br>
<table class="table table-striped table-sm">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
        @auth<th>Delete</th>@endauth
    </tr>
    
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }} </td>
        <td>{{ $student->first_name }}</td>
        <td>{{ $student->last_name }}</td>
        <td>
            <a  title="View Students" href="{{route('student.show',$student->id)}}"><i class="fas fa-info-circle fa-lg"></i></a>
            @auth <a  title="Edit Students" href="{{route('student.edit',$student->id)}}"><i class="fas fa-edit fa-lg"></i></a> @endauth
        </td>
        @auth
        <td>
            <form action="{{route('student.destroy',$student->id)}}" method="POST">
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
    <button type="button" class="btn btn-secondary"><a style="color:White" href="{{route('student.create')}}">Add New</a></button>
</div>
@endauth
@endsection