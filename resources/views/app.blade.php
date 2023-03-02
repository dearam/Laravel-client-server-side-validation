<html lang="en">
<head>
    <title>main</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="{{ asset('js/jquery-3.6.2.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @yield('form')
    @yield('table')
    @yield('edit')
</body>
</html>
