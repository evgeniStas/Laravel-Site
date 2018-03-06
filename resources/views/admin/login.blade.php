<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="<?php echo url('css/bootstrap.css') ?>" rel="stylesheet">
        <link href="<?php echo url('css/style.css') ?>" rel="stylesheet">
        <script src="://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo url('js/bootstrap.js') ?>"></script>
        <script src="<?php echo url('js/main.js') ?>"></script>
    </head>
    <body class="text-center">
        <form id="loginForm" method="POST" action="{{ route('login') }}" class="form-signin">
            {{ csrf_field() }}
            @isset($error_message)
                <div class="alert alert-danger">{{ trans('index.error_login') }}</div>
            @endisset
            @isset($success_message)
                <div class="alert alert-success">{{ trans('index.success_exit') }}</div>
            @endisset

            <h1 class="h3 mb-3 font-weight-normal">{{ trans('index.auth_title') }}</h1>
            <div class="input">
                <div class="placeholder">{{ trans('index.email') }}</div>
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
            <button class="btn btn-lg btn-dark btn-block" type="submit">{{ trans('index.signin') }}</button>
        </form>
    </body>
</html>
