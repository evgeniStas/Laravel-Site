<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="<?php echo url('css/bootstrap.css') ?>" rel="stylesheet">
        <link href="<?php echo url('css/style.css') ?>" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo url('js/bootstrap.js') ?>"></script>
        <script src="<?php echo url('js/main.js') ?>"></script>
    </head>
    <body class="text-center">
        <form method="POST" action="/admin/login" class="form-signin">
            {{ csrf_field() }}
            @isset($error_message)
                <div class="alert alert-danger">{{ $message }}</div>
            @endisset
            @isset($success_message)
                <div class="alert alert-success">{{ $message }}</div>
            @endisset

            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password" required>
            <p></p>
            <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>
        </form>
    </body>
</html>
