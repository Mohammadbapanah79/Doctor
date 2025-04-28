<!doctype html>
<html lang="fa" dir="rtl">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('theme.layouts.head-tag')
    @yield('css')
</head>
<body>



@include('theme.layouts.header')
@yield('main')






@yield('script')

@include('theme.layouts.script')
@include('theme.alerts.sweet-alert.succsess')
</body>
</html>
