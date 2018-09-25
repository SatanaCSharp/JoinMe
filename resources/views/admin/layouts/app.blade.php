<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
@include('admin.includes.head')
</head>
<body>
@include('admin.includes.header')
<div class="content-wrapper">
    @include('admin.includes.sidebar')
    @yield('content')
</div>

@include('admin.includes.footer')
@include('admin.includes.scripts')
</body>
</html>