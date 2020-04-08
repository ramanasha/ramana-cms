@extends('layout/dashboard')
@section('content')
<table>
    <tr>
        <th>First Name</th>
        <td>{{$employee->first_name}}</td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td>{{$employee->last_name}}</td>
    </tr>
</table>
@endsection