@extends('layouts.master')
 @section('title', 'Contact')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Projects</h1></div>
</div>
<div class="row">
    <div class="col-xs-10 centering">
        @foreach($projects as $project)
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{$project->title}}</h3></div>
            <div class="panel-body"><span>{{$project->description}}</span></div>
            <div class="panel-footer"><span class="text-lowercase text-primary">{{$project->link}}</span></div>
            <div class="panel-footer"><span class="text-lowercase text-primary">{{$project->github_link}}</span></div>
        </div>
        @endforeach
    </div>
</div>
@endsection
