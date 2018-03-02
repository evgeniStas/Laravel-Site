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
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Site title</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 3</a>
                    </li><li class="nav-item">
                        <a class="nav-link" href="#">Item 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Item 5</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Exit</a>
                    </li>
                </ul>
            </div>
        </nav>
        <hr>
        <div>
            <h3>Page title</h3>

        </div>
    </div>
</body>
</html>
