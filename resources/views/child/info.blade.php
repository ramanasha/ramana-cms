@extends('layout.dashboard')
@section('content')
<h4>Student &nbsp;-&nbsp;{{$child->first_name}}</h4>
<table class="table table-striped table-sm">
    <tr>
        <td>Name</td>
        <td>{{$child->first_name}}&nbsp;{{$child->last_name}}</td>
    </tr>

    <tr>
        <td>Subjects</td>
        <td>@foreach($child->subjects as $sub)
            <li><a href="{{route('subject.show',$sub->id)}}">{{$sub->name}}</a> (No of Students&nbsp;:&nbsp;{{$sub->children->count()}})</li>
            @endforeach
        </td>
     </tr>   
    <tr>
        <td>Grade</td>
        <td><a href="{{route('grade.show',$child->grade->id)}}">{{$child->grade->grade}}</a> (No of Students&nbsp;:&nbsp;{{$child->grade->children->count()}})</td>
    </tr>
</table>
<button class="btn btn-default btn-sm"><a href="{{route('child.index')}}">Back to Students</a> </button>
@endsection

