@extends('students.layout')

@section('content')

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
    </tr>
    <tr>
        <td>{{$student->studname}}</td>
        <td>{{$student->course}}</td>
        <td>{{$student->fee}}</td>
    </tr>
    <tr>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{route('students.index')}}">Back</a>
                </div>
            </div>
        </div>
    </tr>
</table>