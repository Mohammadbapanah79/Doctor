@extends('theme.layouts.master')

@section('main')
    <div class="body-full-form h-100 w-100">
        <div id="bg"></div>
        <div class="userInfo position-relative">
            <div class="login-form d-flex justify-content-center align-items-center p-3 p-lg-3 w-100">
                <form class="w-100 p-2" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="w-100 my-3">
                        <label class="form-label" for="username">نام کاربری</label>
                        <input class="form-control" id="username"
                               name="username"/>
                        @error('username')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <label class="form-label" for="exampleInputPassword1">رمز عبور</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" name="password"/>
                        @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <button class="btn w-100" type="submit">Login</button>
                    </div>
{{--                    <div class="w-100 my-1 d-flex justify-content-start"><a class="btn btn-sm text-light bg-danger mt-2"--}}
{{--                                                                            href="{{ route('password.request') }}">--}}
{{--                            Forget password </a><a--}}
{{--                            class="btn btn-sm text-light bg-info mt-2 mx-2" href="{{ route('register') }}">sign up </a>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
@endsection
