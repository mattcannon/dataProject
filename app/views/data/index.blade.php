@extends('master')
@section('content')

<div class="container-fluid">
    <div class="col-xs-12">
        <h1>data</h1>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Parent Department</th>
                <th>Organisation</th>
                <th>Unit</th>
                <th>Reporting Senior Post</th>
                <th>Grade</th>
                <th>Payscale Minimum (&pound;)</th>
                <th>Payscale Maximum (&pound;)</th>
                <th>Generic Job Title</th>
                <th>Number of Posts in FTE</th>
                <th>Profession</th>
                <th style="min-width:200px">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{$result->id}}</td>
                <td>{{$result->parent_department}}</td>
                <td>{{$result->organisation}}</td>
                <td>{{$result->unit}}</td>
                <td>{{$result->reporting_senior_post}}</td>
                <td>{{$result->grade}}</td>
                <td>&pound;{{number_format($result->payscale_minimum,2)}}</td>
                <td>&pound;{{number_format($result->payscale_maximum,2)}}</td>
                <td>{{$result->generic_job_title}}</td>
                <td>{{$result->posts_in_fte}}</td>
                <td>{{$result->profession}}</td>
                <td>
                    <a class="btn-xs btn btn-info" href="/data/{{$result->id}}">view</a>
                    <a class="btn-xs btn btn-primary" href="">edit</a>
                    <a class="btn-xs btn btn-danger" href="">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{$results->links()}}
    </div>
</div>
@stop