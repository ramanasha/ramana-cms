@extends('layout.dashboard')
@section('content')
<h3>Subjects</h3>
<table class="table table-striped table-sm">
<th>Subject</th>
<th>No of Students</th>
<th>Action</th>
@foreach($subjects as $sub)
<tr>
<td>{{$sub->name}}</td>
<td>{{$sub->children->count()}}</td>
<td>
    <a title="subject details" href="{{route('subject.show',$sub->id)}}"><span data-feather="info"></span></a>
</td>


</tr>
@endforeach
</table>
<button class="btn btn-default btn-sm"><a href="{{route('child.index')}}">Students</a> </button>
<button class="btn btn-default btn-sm"><a href="{{route('grade.index')}}">Grade</a> </button>
@endsection