<!-- Meta data -->
<meta charset="UTF-8">
    <meta name="copyright" content="jhon anderson">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ url('img/logo.png') }}" type="image/png">
    <title>@yield('name')</title>

    <meta property ="og:name" content ="@yield('name')">
    <meta property ="og:abstract" content ="@yield('abstract')">
    <meta property ="og:url" content ="{{ request()->fullUrl() }}">
    <meta property ="og:image" content ="@yield('imgage')">
    