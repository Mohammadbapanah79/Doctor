@extends('admin.layouts.master')

@section('head-tag')
    <title>تنظیمات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ویرایش تنظیمات</li>
        </ol>
    </nav>
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تنظیمات
                    </h5>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.settings.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>
                <section>
                    <form action="{{ route('admin.settings.update',$setting->id) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <section class="row">
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لوگوی سایت </label>
                                    <input type="file" value=""
                                           class="form-control form-control-sm"
                                           name="logo">
                                </div>
                                @error('logo')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">شماره تلفن</label>
                                    <input type="text" value="{{ $setting->contacts }}"

                                           class="form-control form-control-sm"
                                           name="contacts" placeholder="شماره تلفن را وارد کنید ...">
                                </div>
                                @error('contact')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">حداکثر حجم ویدیو</label>
                                    <input type="text" value="{{ $setting->video_size
 }}"
                                           class="form-control form-control-sm"
                                           name="video_size"
                                           placeholder="حداکثر حجم ویدیو برحسب کیلو باید وارد شود مثلا 20000 کیلو بایت">
                                </div>
                                @error('video_size')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک تلگرام</label>
                                    <input type="text" value="{{ $setting->telegram }}"
                                           class="form-control form-control-sm"
                                           name="telegram" placeholder="آدرس کانال تلگرام">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک اینستاگرام</label>
                                    <input type="text" value="{{ $setting->instagram }}"
                                           class="form-control form-control-sm"
                                           name="instagram" placeholder="آدرس صفحه اینستاگرام ...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک فیس بوک</label>
                                    <input type="text" value="{{ $setting->facebook }}"
                                           class="form-control form-control-sm"
                                           name="facebook" placeholder="آدرس لینک فیس بوک ...">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">ایمیل</label>
                                    <input type="text" value="{{ $setting->email }}"
                                           class="form-control form-control-sm"
                                           name="email" placeholder="آدرس ایمیل ... ">
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">عنوان درباره پزیشک انلاین</label>
                                    <input type="text" value="{{ $setting->about_title }}"
                                           class="form-control form-control-sm"
                                           name="about_title" placeholder="عنوان درباره پزیشک آنلاین">
                                </div>
                                @error('about_title')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">عنوان تبلیغات</label>
                                    <input type="text" value="{{ $setting->ad_title }}"
                                           class="form-control form-control-sm"
                                           name="ad_title" placeholder="عنوان متتن تبلیغات ...">
                                </div>
                                @error('ad_title')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">توضیحات تبلیغات</label>
                                    <textarea name="ad_text" id="" cols="30" rows="10"
                                              class="form-control form-control-sm" placeholder="توضیحات تبلیغات ...">
                                        {{ $setting->ad_text }}
                                    </textarea>
                                </div>
                                @error('ad_text')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">آدرس</label>
                                    <textarea name="address" id="" cols="30" rows="10"
                                              class="form-control form-control-sm" placeholder="آدرس ... ">
                                        {{ $setting->address }}
                                    </textarea>
                                </div>
                                @error('ad_text')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">توضیحات درباره پزشک آنلاین </label>
                                    <textarea name="about_text" id="" cols="30" rows="10"
                                              class="form-control form-control-sm">
                                        {{ $setting->about_text }}
                                    </textarea>
                                </div>
                                @error('about_text')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">توضیحات فوتر</label>
                                    <textarea name="footer_description" id="" cols="30" rows="10"
                                              class="form-control form-control-sm">
                                        {{ $setting->footer_description }}
                                    </textarea>
                                </div>
                                @error('name')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">توضیحات پنل پزشک</label>
                                    <textarea name="doctor_text" id="" cols="30" rows="10"
                                              class="form-control form-control-sm">
                                        {{ $setting->doctor_text }}
                                    </textarea>
                                </div>
                                @error('doctor_text')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">توضیحات پنل بیمار</label>
                                    <textarea name="patient_text" id="" cols="30" rows="10"
                                              class="form-control form-control-sm">
                                        {{ $setting->patient_text }}
                                    </textarea>
                                </div>
                                @error('doctor_text')
                                <span class="alert text-danger">
                        <strong>
                            {{ $message }}
                        </strong>
                    </span>
                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">متن کپی رایت</label>
                                    <textarea name="copy_right" id="" cols="30" rows="10"
                                              class="form-control form-control-sm">
                                        {{ $setting->copy_right }}
                                    </textarea>
                                </div>
                                @error('copy_right')
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
