@extends('theme.layouts.master')

@section('main')
    <div class="body-full-form h-100 w-100">
        <div id="bg"></div>
        <div class="userInfo position-relative">
            <div class="login-form d-flex justify-content-center align-items-center p-3 p-lg-3 w-100">
                <form class="w-100 p-2" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="w-100 my-3">
                        <label class="form-label" for="username">Username</label>
                        <input name="username" class="form-control" id="username" type="text"
                               aria-describedby="emailHelp"/>
                        @error('username')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" aria-describedby="emailHelp" name="email"/>
                        @error('email')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <label class="form-label" for="exampleInputPassword1">Password</label>
                        <input class="form-control" id="exampleInputPassword1" type="password" name="password"/>
                        @error('password')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <label class="form-label" for="exampleInputPassword2">Confirm Password</label>
                        <input class="form-control" id="exampleInputPassword2" type="text"
                               name="password_confirmation"/>
                        @error('password_confirmation')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option selected="">نقش خود را انتخاب کنید</option>
                            <option value="patient">بیمار</option>
                            <option value="doctor">پزشک</option>
                        </select>
                        @error('role')
                        <span class="text-danger">
                            {{ $message }}
                        </span>

                        @enderror
                    </div>
                    <div class="w-100 my-3">
                        <button class="btn w-100" type="submit">Sign Up</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
