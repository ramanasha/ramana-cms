@extends('layout.dashboard')
@section('content')
<h4>Grade {{$grade->grade}}</h4>
<h6>No of students {{$grade->children->count()}} </h6>
<table class="table table-striped table-sm">
    <tr>
        @foreach($grade->children as $child)
        <li><a href="{{route('child.show',$child->id)}}">{{$child->first_name}}&nbsp;&nbsp;{{$child->last_name}}</a></li>
        @endforeach
    </tr>
</table>
<button class="btn btn-default btn-sm"><a href="{{route('grade.index')}}">Grade List</a> </button>
<button class="btn btn-default btn-sm"><a href="{{route('child.index')}}">Back to Students</a> </button>
@endsection