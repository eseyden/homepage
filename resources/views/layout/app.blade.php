
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eric Seyden</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/album.css') }}" rel="stylesheet">
</head>

<body>

@include('layout.partials.header')

<main role="main">
    @yield('main')


</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>&copy; Eric Seyden 20018, all images are my original work.</p>
        <p>Created with  <a href="https://getbootstrap.com/">Bootstrap 4</a> & <a href="https://laravel.com/">Laravel 5.6</a></p>
        <p>Now serving #<span id="counter"></span></p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
