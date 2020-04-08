@extends('layout.dashboard')

@section('content')

       
    <div class="container">
    <br><br><br>
    <br><br><br>


    <marquee><h3 >Welcome To Student Management System</h3></marquee>
        
        <br><br>    
        <div class="row">
        <div class="col-4">
            
        </div>
        <div class="col-8">
            <button type="button" class="btn btn-secondary"><a style="color:White" href="{{route('student.index')}}">To Student Details</a></button>
            <button type="button" class="btn btn-secondary"><a style="color:White" href="{{route('employee.index')}}">To Employee Details</a></button>
        </div>  
        
         
    </div>


@endsection
