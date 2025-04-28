@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پزشک</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش کاربران</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بیماران</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد بیمار جدید</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد بیمار جدید
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.patients.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.patients.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section class="row">


                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام</label>
                                    <input type="text" class="form-control form-control-sm" name="name">
                                    @error('name')

                                    <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                    @enderror
                                </div>
                            </section>


                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام خانوادگی</label>
                                    <input type="text" class="form-control form-control-sm" name="lastname">
                                </div>
                                @error('lastname')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">ایمیل</label>
                                    <input type="email" class="form-control form-control-sm" name="email">
                                </div>
                                @error('email')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> شماره موبایل</label>
                                    <input type="text" class="form-control form-control-sm" name="phone">
                                </div>
                                @error('phone')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> شماره پاسپورت </label>
                                    <input type="number" class="form-control form-control-sm" name="pass_number">
                                </div>
                                @error('pass_number')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> شماره ملی </label>
                                    <input type="number" class="form-control form-control-sm" name="user_code">
                                </div>
                                @error('user_code')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">کلمه عبور</label>
                                    <input type="password" class="form-control form-control-sm" name="password">
                                    @error('password')

                                    <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                    @enderror
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تکرار کلمه عبور</label>
                                    <input type="password" class="form-control form-control-sm"
                                           name="password_confirmation" id="password">
                                </div>
                                @error('password_confirmation')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">آدرس :</label>
                                    <textarea name="address" id="" cols="30" rows="10" placeholder="آدرس" class="form-control"></textarea>
                                </div>
                                @error('password_confirmation')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

@endsection
