@extends('master')
@section('content')
<div class="container-fluid">
    <div class="col-xs-4">
        <div class="form-group">
            <label>ID</label>
            <p class="help-block">{{$result->id}}</p>
        </div>
        <div class="form-group">
            <label>Parent Department</label>
            <p class="help-block">{{$result->parent_department}}</p>
        </div>
        <div class="form-group">
            <label>Organisation</label>
            <p class="help-block">{{$result->organisation}}</p>
        </div>
        <div class="form-group">
            <label>Unit</label>
            <p class="help-block">{{$result->unit}}</p>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Reporting Senior Post</label>
            <p class="help-block">{{$result->reporting_senior_post}}</p>
        </div>

        <div class="form-group">
            <label>Grade</label>
            <p class="help-block">{{$result->grade}}</p>

        </div>
        <div class="form-group">
            <label>Payscale Minimum (&pound;)</label>
            <p class="help-block">&pound;{{number_format($result->payscale_minimum,2)}}</p>
        </div>
        <div class="form-group">
            <label>Payscale Maximum (&pound;)</label>
            <p class="help-block">&pound;{{number_format($result->payscale_maximum,2)}}</p>
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Generic Job Title</label>
            <p class="help-block">{{$result->generic_job_title}}</p>
        </div>
        <div class="form-group">
            <label>Number of Posts in FTE</label>
            <p class="help-block">{{$result->posts_in_fte}}</p>
        </div>
        <div class="form-group">
            <label>Profession</label>
            <p class="help-block">{{$result->profession}}</p>
        </div>
    </div>
    <div class="col-xs-12">
        <a class="btn btn-primary" href="/data/">Back</a>
        <a class="btn pull-right btn-primary" href="/data/{{$result->id}}/edit">Edit</a>
    </div>
</div>
@stop