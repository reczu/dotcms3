<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>dotCMS 3</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

    @include('admin.partials.navigation')
    <div class="container">
        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>