<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body style="background-color: #ececec">

<div class="shadow-sm mb-5 bg-body rounded">
<header class="container d-flex flex-wrap justify-content-center py-3 mb-4">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Simple header</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link" href="{{route('income.index')}}">income</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('about.index')}}">about</a></li>
        <li class="nav-item"><a class="nav-link" href="{{route('contact.index')}}">contact</a></li>
    </ul>
</header>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
