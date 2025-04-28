@extends('patient.layouts.master')

@section('head-tag')
    <title>رزرو های من</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('patient.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش بیمار</a></li>
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
                    <a href="{{ route('patient.reserves.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="" method="post">
                        @csrf
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تخصص :</label>

                                    <select name="parent_category" id="parent_category"
                                            class="form-control form-control-sm">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام پزشک :</label>
                                    <select name="parent_category" id="parent_category"
                                            class="form-control form-control-sm">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </section>

                            <section class="col-12">
                                <section class="col-12">
                                    <section class="row border-top mt-3 py-3">

                                        <section class="col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="" id="check1"
                                                       checked>
                                                <label for="check1" class="form-check-label mr-3 mt-1">10 تا 12</label>
                                            </div>
                                        </section>
                                        <section class="col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="" id="check2"
                                                       checked>
                                                <label for="check2" class="form-check-label mr-3 mt-1">10 تا 12</label>
                                            </div>
                                        </section>
                                        <section class="col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="" id="check2"
                                                       checked>
                                                <label for="check2" class="form-check-label mr-3 mt-1">10 تا 12</label>
                                            </div>
                                        </section>
                                        <section class="col-md-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="" id="check2"
                                                       checked>
                                                <label for="check2" class="form-check-label mr-3 mt-1">10 تا 12</label>
                                            </div>
                                        </section>
                                    </section>

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
