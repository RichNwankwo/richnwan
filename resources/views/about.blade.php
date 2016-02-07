@extends('layouts.master')
 @section('title', 'About')
@section('content')
<div class="row">
    <div class="col-md-12 text-center">
        <p class="lead"> </p>
        <div class="jumbotron">
            <h1>About Me</h1>
            <p>I&#39;m a software engineer based out of Philadelphia PA. I have a passion for solving problems, learning new things and creating great user experiences </p>
            <p>
                <a class="btn btn-default" role="button" href="#"> </a>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Technologies/Frameworks I love using</h3></div>
                    <div class="panel-body centering">
                        <div class="row">
                            <div class="col-xs-12 centering">
                                <p class="text-center"><strong>PHP</strong>: Laravel, Codeigniter</p>
                                <p class="text-center"><strong>Javascript</strong>: React, Angular ,Vue</p>
                                <p class="text-center"><strong>SQL</strong>: MySQL, PostgreSQL</p>
                                <p class="text-center"><strong>HTML/CSS</strong>: Bootstrap, SASS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection