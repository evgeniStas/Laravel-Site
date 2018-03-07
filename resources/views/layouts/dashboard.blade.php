<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans('index.title') }}</title>

    <link href="<?php echo url('css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo url('css/style.css') ?>" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo url('js/bootstrap.js') ?>"></script>
    <script src="<?php echo url('js/main.js') ?>"></script>
</head>
<body>
    <div class="menu">
        <div class="icon-close">
            Close icon
        </div>
        <ul>
            <li class="{!! Helper::isActiveRoute('admin') !!}"><a href="{{ route('admin') }}">Dashboard</a></li>
            <li class="{!! Helper::isActiveRoute('admin.add') !!}"><a href="{{ route('admin.add') }}">Add new</a></li>
            <li>Icon</li>
            <li>Icon</li>
            <li>Icon</li>
            <li><a href="{!! Helper::GetLangUrl() !!}">Change lang</a></li>
            <li><a href="{{ route('logout') }}">{{ trans('index.logout') }}</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="icon-menu">
            <button class="btn">Menu</button>
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
