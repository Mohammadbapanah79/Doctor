@extends('doctor.layouts.master')

@section('head-tag')
    <title>دسته بندی</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">دسته بندی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد دسته بندی</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد دسته بندی
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('doctor.days.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('doctor.days.store') }}" method="post">
                        @csrf
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">هفته :</label>
                                    <input type="text" class="form-control form-control-sm" name="week_number" value="{{ old('week_number') }}" placeholder="مثال : هفته دوم">
                                </div>
                                @error('week_number')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">ماه :</label>
                                    <input type="text" class="form-control form-control-sm" name="month" value="{{ old('month') }}" placeholder="مثال :‌اسفند">
                                </div>
                                @error('month')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">شنبه :</label>
                                    <input type="text" class="form-control form-control-sm" name="saturday" value="{{ old('saturday') }}" placeholder="صبح 10 الی 12  و عصر 17 الی 20">
                                </div>
                                @error('saturday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">یکشنبه :</label>
                                    <input type="text" class="form-control form-control-sm" name="sunday" value="{{ old('sunday') }}" placeholder="صبح 10 الی 12  و عصر 17 الی 20">
                                </div>
                                @error('saturday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دوشنبه :</label>
                                    <input type="text" class="form-control form-control-sm" name="monday" value="{{ old('monday') }}" placeholder="صبح 10 الی 12  و عصر 17 الی 20">
                                </div>
                                @error('monday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">سه شنبه :</label>
                                    <input type="text" class="form-control form-control-sm" name="tuesday" value="{{ old('tuesday') }}" placeholder="صبح 10 الی 12  و عصر 17 الی 20">
                                </div>
                                @error('tuesday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">چهارشنبه :</label>
                                    <input type="text" class="form-control form-control-sm" name="wednesday" value="{{ old('wednesday') }}" placeholder="صبح 10 الی 12  و عصر 17 الی 20">
                                </div>
                                @error('tuesday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">پنجشنبه :</label>
                                    <input type="text" placeholder="صبح 10 الی 12  و عصر 17 الی 20" class="form-control form-control-sm" name="thursday" value="{{ old('thursday') }}">
                                </div>
                                @error('thursday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">جمعه :</label>
                                    <input type="text" placeholder="صبح 10 الی 12  و عصر 17 الی 20" class="form-control form-control-sm" name="friday" value="{{ old('friday') }}">
                                </div>
                                @error('friday')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12">
                                <button class="btn btn-primary btn-sm" type="submit">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

@endsection
