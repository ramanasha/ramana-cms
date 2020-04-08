@extends('layout.dashboard')
@section('content')
<h4>Subject&nbsp;-&nbsp;{{$subject->name}}</h4>
<h6>No of Students {{$subject->children->count()}}</h6>
<table class="table table-striped table-sm">
    

    <tr>
        <td>Students</td>
        <td>@foreach($subject->children as $child)
            <li><a href="{{route('child.show',$child->id)}}">{{$child->first_name}}&nbsp;&nbsp;{{$child->last_name}}</a> (No of Subjects&nbsp;:&nbsp;{{$child->subjects->count()}})</li>
            @endforeach
        </td>
     </tr>   
    
</table>

<button class="btn btn-default btn-sm"><a href="{{route('subject.index')}}">Subject List</a> </button>
<button class="btn btn-default btn-sm"><a href="{{route('child.index')}}">Students</a> </button>
<button class="btn btn-default btn-sm"><a href="{{route('grade.index')}}">Grade</a> </button>
@endsection

