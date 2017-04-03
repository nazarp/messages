@extends('master')
@section('content')
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <form id="form" class="card-block col-4" style="display:none">
            
                <!--Header-->
                <div class="text-center">
                    <h3><i class="fa fa-envelope"></i> Write a message:</h3>
                    <hr class="mt-2 mb-2">
                </div>
            
                <!--Body-->
                <p>Choose how it will be destructed</p>
                <br>
                
                <fieldset class="form-group method">
                    <input name="destruction_method" required type="radio" id="radio1" value="2">
                    <label for="radio1">After the first link visit</label>
                </fieldset>
                
                <fieldset class="form-group method">
                    <input name="destruction_method" required type="radio" id="radio2" value="1">
                    <label for="radio2">after 1 minute</label>
                </fieldset>
            
                <div class="md-form">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea" maxlength="255" required></textarea>
                    <label for="form8">Message text</label>
                </div>
                
                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form3" class="form-control" required>
                    <label for="form3">Your password</label>
                </div>
            
                <div class="text-center">
                    <button class="btn btn-default">Submit</button>
                    <input type="reset" hidden />
                </div>
            
            </form>
            <ul id="intro" class="animated fadeInUp">
                <li>
                    <h1 class="h1-responsive">Self-destructing messages</h1></li>
                <li>
                    <p>You are able to choose destruction option</p>
                </li>
                <li>
                    <a href="#" class="new_message btn btn-primary btn-lg">New message</a>
                    <!--<a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg">Learn more</a>-->
                </li>
            </ul>
            <ul id="response" class="" style="display:none">
                <li>
                    <h1 class="h1-responsive">Sent! Use link below to access the message</h1></li>
                <li>
                    <p></p>
                </li>
                <li>
                    <a href="#" class="new_message btn btn-primary btn-lg">New message</a>
                    <!--<a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg">Learn more</a>-->
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->
@endsection