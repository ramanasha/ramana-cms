@extends('layout.dashboard')
@section('content')
<h3>Students</h3>
<table class="table table-striped table-sm">
<th>Name</th>
<th>Action</th>
@foreach($children as $child)
<tr>
<td>{{$child->first_name}}</td>
<td>
    <!-- <a title="subjects" href="{{route('child.show',$child->id)}}"><span data-feather="book"></span></a> -->
    <a title="student details" href="{{route('child.show',$child->id)}}"><span data-feather="info"></span></a>
</td>


</tr>
@endforeach
</table>
<button class="btn btn-default btn-sm"><a href="{{route('subject.index')}}">Subjects</a> </button>
<button class="btn btn-default btn-sm"><a href="{{route('grade.index')}}">Grades</a> </button>
@endsection