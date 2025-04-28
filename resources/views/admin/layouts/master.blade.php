<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body dir="rtl">

@include('admin.layouts.header')
<section class="body-container">
    @include('admin.layouts.sidebar')

    <section id="main-body" class="main-body">
        @yield('content')
    </section>
</section>

@include('admin.layouts.footer')

@include('admin.layouts.script')

@yield('script')
@include('admin.alerts.sweet-alert.succsess')
@include('admin.alerts.sweet-alert.delete-confirm')
</body>

</html>
