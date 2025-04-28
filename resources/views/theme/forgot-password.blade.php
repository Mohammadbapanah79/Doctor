@extends('theme.layouts.master')
@section('head-tag')
    <title>صفحه اصلی</title>
@endsection
{{--@section('main')--}}
{{--    <div class="page-banner-area item-bg1">--}}
{{--        <div class="d-table">--}}
{{--            <div class="d-table-cell">--}}
{{--                <div class="container">--}}
{{--                    <div class="page-banner-content">--}}
{{--                        <h2>تغییر گذرواژه</h2>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="index.html">خانه</a>--}}
{{--                            </li>--}}
{{--                            <li>تغییر گذرواژه</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <section class="change-password-area ptb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="change-password-form">--}}
{{--                <h2>تغییر گذرواژه</h2>--}}
{{--                <form method="POST" action="{{ route('password.email') }}">--}}
{{--                    @csrf--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    <p class="text-center">--}}
{{--                        {{ __('رمز عبور خود را فراموش کرده اید؟ مشکلی نیست فقط آدرس ایمیل خود را به ما اطلاع دهید و ما یک پیوند بازنشانی رمز عبور را برای شما ایمیل می کنیم که به شما امکان می دهد رمز جدیدی را انتخاب کنید.') }}--}}

{{--                    </p>--}}
{{--                    <hr>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>آدرس ایمیل</label>--}}
{{--                        <input id="email" type="email"--}}
{{--                               class="form-control @error('email') is-invalid @enderror" name="email"--}}
{{--                               value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}
{{--                        @error('email')--}}
{{--                        <span class="text-danger">--}}
{{--                            {{ $message }}--}}
{{--                        </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}

{{--                    <button type="submit">بازیابی گذرواژه</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}

@section('main')
    <div class="body-full-form h-100 w-100">
        <div id="bg"></div>
        <div class="userInfo position-relative">
            <div class="login-form d-flex justify-content-center align-items-center p-3 p-lg-3 w-100">
                <form class="w-100 p-2" action="{{ route('password.email') }}" method="post">
                    @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center text-black alert alert-info">
                        {{ __('رمز عبور خود را فراموش کرده اید؟ مشکلی نیست فقط آدرس ایمیل خود را به ما اطلاع دهید و ما یک پیوند بازنشانی رمز عبور را برای شما ایمیل می کنیم که به شما امکان می دهد رمز جدیدی را انتخاب کنید.') }}

                    </p>
                    <div class="w-100 my-3">
                        <label class="form-label" for="exampleInputEmail1">email</label>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror" name="email"
                               value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <button class="btn btn-info w-100" type="submit">بازیابی گذر واژه</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
