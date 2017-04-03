@extends('master')
@section('content')
    <!--Mask-->
    <div class="view hm-black-strong">
        <div class="full-bg-img flex-center">
            <ul id="intro" class="animated fadeInUp">
                <li>
                    <h1 class="h1-responsive">Message for You:</h1>
                </li>
                <li id="viewMessage" class="flex-center">
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form3" class="form-control" required>
                        <label for="form3">Your password</label>
                    </div>
                    <a id="showMessage" href="#" class="btn btn-default btn-lg">Decrypt</a>
                </li>
                <li>
                    <a href="/" class="btn btn-primary btn-lg">New message</a>
                </li>
            </ul>
        </div>
    </div>
    <script>
        var cryptedMessage = {!!json_encode($message)!!};
    </script>
    <!--/.Mask-->
@endsection