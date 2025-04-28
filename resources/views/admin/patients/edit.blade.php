@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد بیماران</title>
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
                       3 ایجاد بیمار جدید
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('patients.profile.update',$patient->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section class="row">


                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام</label>
                                    <input type="text" value="" class="form-control form-control-sm"
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
                                    <input type="text" value=""
                                           class="form-control form-control-sm" name="lastname">
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
                                    <input type="text" value="" class="form-control form-control-sm"
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
                                           value="">
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
