<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <title>@yield('title')</title>
    @include('admin.includes.head')
</head>
<body>
<div class="wrapper">
    @include('admin.includes.sidebar')
    <div class="main-panel">
        @include('admin.includes.header')
        <div class="panel-header panel-header-sm">
        </div>
        @yield('content')
    </div>
</div>

@include('admin.includes.footer')
@include('admin.includes.scripts')
</body>
</html>