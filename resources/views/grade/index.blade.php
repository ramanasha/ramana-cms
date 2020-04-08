@extends('layout.dashboard')
@section('content')
<h3>Grade</h3>
<table class="table table-striped table-sm">
<th>Grade</th>
<th>No of Students</th>
<th>Action</th>

@foreach($grades as $grade)
<tr>
<td>{{$grade->grade}}</td>
<td>{{$grade->children->count()}}</td>
<td><a href="{{route('grade.show',$grade->id)}}"><span data-feather="info"></span></a></td>

</td>
</tr>
@endforeach
</table>
<button class="btn btn-default btn-sm"><a href="{{route('child.index')}}">Students</a> </button>
<button class="btn btn-default btn-sm"><a href="{{route('subject.index')}}">Subjects</a> </button>
@endsection