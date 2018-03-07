<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="<?php echo url('css/bootstrap.css') ?>" rel="stylesheet">
        <link href="<?php echo url('css/style.css') ?>" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo url('js/bootstrap.js') ?>"></script>
        <script src="<?php echo url('js/main.js') ?>"></script>
    </head>
    <body class="text-center">
        <div class="blueBackground"></div>
        @isset($error_message)
            <div class="alert alert-danger">{{ trans('index.error_login') }}</div>
        @endisset
        @isset($success_message)
            <div class="alert alert-success">{{ trans('index.success_exit') }}</div>
        @endisset
        <h3 class="autn-title">{{ trans('index.auth_title') }}</h3>
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="form-signin">
            {{ csrf_field() }}
            <div class="input">
                <div class="placeholder active">{{ trans('index.email') }}</div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input id="inputEmail" type="email" name="email" class="form-control" placeholder="{{ trans('index.email') }}" required autofocus>
                </div>
            </div>
            <div class="input">
                <div class="placeholder">{{ trans('index.password') }}</div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input id="inputPassword" type="password" name="password" class="form-control" placeholder="{{ trans('index.password') }}" required>
                </div>
            </div>
            <p></p>
            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ trans('index.signin') }}</button>
        </form>
    </body>
</html>
