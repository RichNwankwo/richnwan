@extends('layouts.master')
 @section('title', 'Contact')
@section('content')
<div class="row">
    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-10 centering">
        <form  v-on:submit.prevent="validate" id="contactForm" method="POST" action="/contact" class="bootstrap-form-with-validation">
            <h2 class="text-center">Contact Me</h2>
            <div class="form-group has-feedback"  v-bind:class="{'has-success': namePass,'has-error':nameFail}">
                <label for="text-input"  class="control-label">Name</label>
                <input v-on:change="validateName" type="text" v-model="name" name="name" class="form-control" id="text-input" /><span id="nameValidation" aria-hidden="true" v-bind:class="{'glyphicon-ok': namePass, 'glyphicon-remove':nameFail}" class="glyphicon form-control-feedback"></span></div>
            <div class="form-group has-feedback"  v-bind:class="{'has-success':emailPass,'has-error':emailFail}">
                <label for="email-input" class="control-label">Email Input</label>
                <input v-on:change="validateEmail" type="email" v-model="email" name="email" class="form-control" id="email-input" /><span id="emailValidation" aria-hidden="true" v-bind:class="{'glyphicon-ok': emailPass, 'glyphicon-remove': emailFail}" class="glyphicon form-control-feedback"></span></div>
            <div class="form-group has-feedback" v-bind:class="{'has-success':messagePass,'has-error':messageFail}">
                <label for="textarea-input" class="control-label">Message</label>
                <textarea v-on:change="validateMessage" name="message" v-model="message" class="form-control" id="textarea-input"></textarea><span id="messageValidation" aria-hidden="true" v-bind:class="{'glyphicon-ok':messagePass, 'glyphicon-remove': messageFail}" class="glyphicon form-control-feedback"></span></div>
            <div class="form-group has-warning">
                <button  class="btn btn-primary pjax" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection
