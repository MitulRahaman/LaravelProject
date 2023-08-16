<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Xenon - Forget Password</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('backend/css/fonts/linecons/css/linecons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-components.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/xenon-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}">

    <script src="{{ asset('backend/js/jquery-1.11.1.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-light">


<div class="login-container">

    <div class="row">

        <div class="col-sm-6">

            <script type="text/javascript">
                jQuery(document).ready(function($)
                {
                    // Reveal Login form
                    setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
                });
            </script>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

            <!-- Add class "fade-in-effect" for login form effect -->
            <form method="POST" action="{{ route('password.email') }}" class="login-form fade-in-effect">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-label class="control-label" for="email" :value="__('Email')" />

                    <x-input class="form-control" id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                
                <!-- Button -->
                <div class="form-group">
                    <x-button class="btn btn-primary  btn-block text-left">
                    {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>

            </form>

        </div>

    </div>

</div>



<!-- Bottom Scripts -->
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/TweenMax.min.js') }}"></script>
<script src="{{ asset('backend/js/resizeable.js') }}"></script>
<script src="{{ asset('backend/js/joinable.js') }}"></script>
<script src="{{ asset('backend/js/xenon-api.js') }}"></script>
<script src="{{ asset('backend/js/xenon-toggles.js') }}"></script>
<script src="{{ asset('backend/js/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/toastr/toastr.min.js') }}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{ asset('backend/js/xenon-custom.js') }}"></script>

</body>
</html>
