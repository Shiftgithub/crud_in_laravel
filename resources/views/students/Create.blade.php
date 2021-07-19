@extends('students.layout')

@section('content')

<div class="pull-left">
    <h2>Student Crud</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('students.index')}}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops</strong> there were some problems with your input.<br><br>
    <ul>
        @foreach( $errors->all() as $errors)
        <li>{{ $errors}}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('students.store')}}" method="POST">
    @csrf
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Student Name</strong>
            <input type="text" name="studname" class="form-control" placeholder="Enter student name">
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Course Name</strong>
            <input type="text" name="course" class="form-control" placeholder="Enter Course name">
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Fee</strong>
            <input type="number" name="fee" class="form-control" placeholder="Enter Fee Amount">
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection