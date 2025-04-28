@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پزشکان</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش کاربران</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">پزشکان</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد پزشک جدید</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد پزشک جدید
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.user.doctors.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.user.doctors.update',$doctor->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section class="row">


                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام</label>
                                    <input type="text" value="{{ $patient->name }}" class="form-control form-control-sm"
                                           name="name">
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
                                    <input type="text" value="{{ $patient->last_name }}"
                                           class="form-control form-control-sm" name="last_name">
                                </div>
                                @error('last_name')

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
                                    <input type="text" value="{{ $patient->email }}" class="form-control form-control-sm"
                                           name="email">
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
                                    <input type="text" class="form-control form-control-sm" name="phone"
                                           value="{{ $patient->phone }}">
                                </div>
                                @error('phone')

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
