@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پزشک</title>
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
                    <a href="{{ route('admin.doctors.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.doctors.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تخصص</label>
                                    <select name="expertise_id" id="" class="form-control">
                                        <option value="" selected>تخصص</option>
                                        @foreach($expertises as $expertise)
                                            <option value="{{ $expertise->id }}">{{ $expertise->expertise }}</option>
                                        @endforeach
                                    </select>
                                    @error('expertise_id')

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
                                    <label for=""> اینستا گرام</label>
                                    <input type="text" class="form-control form-control-sm" name="instagram">
                                </div>
                                @error('instagram')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for=""> تلگرام</label>
                                    <input type="text" class="form-control form-control-sm" name="telegram">
                                </div>
                                @error('telegram')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">فیس بوک</label>
                                    <input type="text" class="form-control form-control-sm" name="facebook">
                                </div>
                                @error('facebook')

                                <span class="alert text-danger">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">واتس اپ</label>
                                    <input type="text" class="form-control form-control-sm" name="whatsapp">
                                </div>
                                @error('whatsapp')

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
                                    <textarea name="address" id="" cols="30" rows="10" placeholder="آدرس"
                                              class="form-control"></textarea>
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
