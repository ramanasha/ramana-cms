@extends('layout.dashboard')
@section('content')
<h4>{{$child->first_name}}</h4>
<table class="table table-striped table-sm">
    <tr>
        @foreach($child->subjects as $sub)
        <li>{{$sub->name}}</li>
        @endforeach
    </tr>
</table>
@endsection