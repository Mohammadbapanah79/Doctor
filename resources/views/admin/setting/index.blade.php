@extends('admin.layouts.master')

@section('head-tag')
    <title>تنظیمات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> تنظیمات</li>
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
                    <a href="" class="btn btn-info btn-sm disabled">ایجاد تنظیمات جدید</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover" style="width: 2500px;font-size: 12px">
                        <thead>
                        <tr class="text-center">

                            <th>لوگوی سایت</th>
                            <th>شماره تماس</th>
                            <th>اینستاگرام</th>
                            <th>لینک تلگرام</th>
                            <th>لینک فیسبوک</th>
                            <th>ایمیل</th>
                            <th>عنوان تبلیغات</th>
                            <th>عنوان درباره پزشک آنلاین</th>
                            <th>متن کپی رایت</th>
                            <th>آدرس</th>
                            <th>توضیحات تبلیغ</th>
                            <th>توضیحات فوتر</th>
                            <th>توضیحات پنل بیمار</th>
                            <th>توضیحات پنل دکتر</th>
                            <th>سایز ویدیو</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('uploads/'.$setting->logo) }}" alt="" width="30">
                            </td>
                            <td class="text-center">{{ $setting->contacts }}</td>
                            <td class="text-center">{{ $setting->instagram }}</td>
                            <td class="text-center">{{ $setting->telegram }}</td>
                            <td class="text-center">{{ $setting->facebook }}</td>
                            <td class="text-center">{{ $setting->email }}</td>
                            <td class="text-center">{{ $setting->ad_title }}</td>
                            <td class="text-center">{{ $setting->about_title }}</td>
                            <td class="text-center">{{ $setting->copy_right }}</td>
                            <td>
                                {!! \Illuminate\Support\Str::limit($setting->address, 100, $end='...') !!}
                            </td>
                            <td> {!! \Illuminate\Support\Str::limit($setting->ad_text, 100, $end='...') !!}</td>
                            <td> {!! \Illuminate\Support\Str::limit($setting->footer_description, 100, $end='...') !!}</td>
                            <td> {!! \Illuminate\Support\Str::limit($setting->patient_text, 100, $end='...') !!}</td>
                            <td>     {!! \Illuminate\Support\Str::limit($setting->doctor_text, 100, $end='...') !!}</td>
                            <td> کیلو بایت{{ $setting->video_size }}</td>
                            <td class="width-22-rem text-left">
                                <a style="margin-left: 115px" href="{{ route('admin.settings.edit',$setting->id) }}"
                                   class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                            </td>
                        </tr>

                        </tbody>

                    </table>
                </section>

            </section>
        </section>
    </section>

@endsection
