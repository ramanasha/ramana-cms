@extends('layout.dashboard')
@section('content')
<table>
    <tr>
        <th>First Name</th>
        <td>{{$student->first_name}}</td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td>{{$student->last_name}}</td>
    </tr>
    <tr>
        <th>User ID</th>
        <td>{{$student->user_id}}</td>
    </tr>
    <tr>
        <th>User ID</th>
        <td>{{$student->grade_id}}</td>
    </tr>
</table>
@endsection