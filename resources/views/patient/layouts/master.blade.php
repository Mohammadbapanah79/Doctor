<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')

</head>

<body dir="rtl">

    @include('patient.layouts.header')



    <section class="body-container">

        @include('patient.layouts.sidebar')


        <section id="main-body" class="main-body">

            @yield('content')

        </section>
    </section>


    @include('patient.layouts.script')
    @yield('script')

    @include('patient.alerts.sweet-alert.succsess')
</body>
</html>
