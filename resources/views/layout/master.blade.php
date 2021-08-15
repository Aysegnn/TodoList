<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO APP</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body style="background-color:grey">

    <div class="container">
        @yield('content')
    </div>

<script src="{{asset('js/app.js')}}"></script>
@yield('js')
</body>
</html>