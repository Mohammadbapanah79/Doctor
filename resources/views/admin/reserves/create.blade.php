@extends('admin.layouts.master')

@section('head-tag')
    <title>رزرو های من</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('doctors.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش ادمین</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">رزرو های من</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد رزرو جدید</li>
        </ol>
    </nav>
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد رزرو جدید
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.reserves.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.reserves.store') }}" method="post">
                        @csrf
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام بیمار :</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام خانوادگی بیمار :</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ مراجعه</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">ساعت مراجعه</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </section>



                            <section class="col-12">
                                <section class="col-12">


                                    <button class="btn btn-primary btn-sm">ثبت</button>
                                </section>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

@endsection
