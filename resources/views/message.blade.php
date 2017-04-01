@extends('master')
@section('content')
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul id="intro" class="animated fadeInUp">
                <li>
                    <h1 class="h1-responsive">Message for You:</h1></li>
                <li class="flex-center">
                    <p class="col-6">{{$message}}</p>
                </li>
                <li>
                    <a href="/" class="btn btn-primary btn-lg">New message</a>
                    <!--<a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default btn-lg">Learn more</a>-->
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->
@endsection