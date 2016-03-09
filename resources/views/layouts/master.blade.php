<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="{!! asset('img/favicon.ico') !!}">

    <title>PutGrabber</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
</head>

<body>

<div class="flex-container">
    <div class="sidebar-nav">
        <p class="logo">PutGrabber</p>
        <section class="avatar">
            <img class="img-circle" src="https://api.adorable.io/avatars/75/colin%40thedecarlos.ca">
            <p>thedecarlos</p>
        </section>
        <nav>
            <ul class="list-group">
                <li class="list-group-item"><a href="{!! url('/downloads') !!}">Available Downloads</a></li>
                <li class="list-group-item"><a href="{!! url('/shows') !!}">Show Settings</a></li>
                <li class="list-group-item"><a href="{!! url('/logs') !!}">Logs</a></li>
            </ul>
        </nav>

    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-3 col-md-offset-3">
                @yield('content')
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! asset('js/jquery.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</body>
</html>
