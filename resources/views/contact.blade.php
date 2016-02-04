@extends('layouts.master')
 @section('title', 'Contact')
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-10 centering">
        <form class="bootstrap-form-with-validation">
            <h2 class="text-center">Contact Me</h2>
            <div class="form-group has-success has-feedback">
                <label for="text-input" class="control-label">Name </label>
                <input type="text" name="text-input" class="form-control" id="text-input" /><span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span></div>
            <div class="form-group has-error has-feedback">
                <label for="email-input" class="control-label">Email Input</label>
                <input type="email" name="email-input" class="form-control" id="email-input" /><span aria-hidden="true" class="glyphicon glyphicon-remove form-control-feedback"></span></div>
            <div class="form-group has-success has-feedback">
                <label for="textarea-input" class="control-label">Textarea </label>
                <textarea name="textarea" class="form-control" id="textarea-input"></textarea><span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span></div>
            <div class="form-group has-warning">
                <button class="btn btn-primary" type="submit">Send </button>
            </div>
        </form>
    </div>
</div>
@endsection
