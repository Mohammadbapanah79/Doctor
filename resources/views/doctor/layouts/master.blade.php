<!DOCTYPE html>
<html lang="en">

<head>
    @include('doctor.layouts.head-tag')
    @yield('head-tag')
</head>

<body dir="rtl">

@include('doctor.layouts.header')
<section class="body-container">
    @include('doctor.layouts.sidebar')

    <section id="main-body" class="main-body">
        @yield('content')
    </section>
</section>

@include('doctor.layouts.footer')

@include('doctor.layouts.script')

@yield('script')
@include('doctor.alerts.sweet-alert.succsess')
@include('doctor.alerts.sweet-alert.delete-confirm')
@include('doctor.alerts.sweet-alert.warning')
</body>

</html>
