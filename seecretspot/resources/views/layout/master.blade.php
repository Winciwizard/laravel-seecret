<!doctype html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
</head>
<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
