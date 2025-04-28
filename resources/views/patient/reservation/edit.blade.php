@extends('patient.layouts.master')

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
                    <a href="{{ route('patient.reserves.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>
                <section>
                    <form action="{{ route('patient.reserves.update',$reserve->id) }}" method="post">
                        @csrf
                        @method('put')
                        <section class="row">
                            <section class="col-12 col-md-6">

                                <div class="form-group">
                                    <label for="">تاریخ رزرو</label>
                                    <input type="date" value="{{ $reserve->service_date }}" class="form-control form-control-sm"
                                           name="service_date">
                                </div>
                                @error('service_date')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">ساعت ویزیت</label>
                                    <input type="time" value="{{ $reserve->visiting_hour }}" class="form-control form-control-sm"
                                           name="visiting_hour">
                                </div>
                                @error('service_date')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
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
