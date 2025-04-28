@extends('doctor.layouts.master')

@section('head-tag')
    <title>ایجاد پست</title>
@endsection
@section('head-tag')
    <style>

    </style>
@endsection
@section('content')
    <form action="{{ route('doctor.profile.update',$doctor->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="container bg-white mt-5 mb-5 border-radius-15px">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img src="{{ asset("uploads/".$doctor->image) }}" alt="image" width="100">
                        <span
                            class="font-weight-bold">
                        {{ $doctor->name }}  {{ $doctor->lastname }}

                    </span>
                        <span
                            class="text-black-50">{{ $doctor->email }}</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">ویرایش پروفایل</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">نام</label><input type="text"
                                                                                          class="form-control"
                                                                                          name="name"
                                                                                          placeholder="نام..."
                                                                                          value="{{ $doctor->name }}">
                            </div>
                            <div class="col-md-6"><label class="labels">نام خانوادگی</label>
                                <input type="text" name="lastname"
                                       class="form-control" value="{{ $doctor->lastname }}"
                                       placeholder="نام خانوادگی ...">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">شماره موبایل</label><input type="text"
                                                                                                    name="phone"
                                                                                                    class="form-control"
                                                                                                    placeholder="شماره همراه ..."
                                                                                                    value="{{ $doctor->phone }}">
                            </div>
                            <div class="col-md-12"><label class="labels">ایمیل</label><input type="text" name="email"
                                                                                             class="form-control"
                                                                                             placeholder="ایمیل ..."
                                                                                             value="{{ $doctor->email }}">
                            </div>
                            <div class="col-md-12"><label class="labels">شماره ثابت</label><input type="text"
                                                                                                  name="fixed_phone"
                                                                                                  class="form-control"
                                                                                                  placeholder="شماره ثابت"
                                                                                                  value="{{ $doctor->fixed_phone }}">
                            </div>
                            <div class="col-md-12"><label class="labels">اینستاگرام</label><input type="text"
                                                                                                  name="instagram"
                                                                                                  class="form-control"
                                                                                                  placeholder="اینستاگرام..."
                                                                                                  value="{{ $doctor->instagram }}">
                            </div>
                            <div class="col-md-12"><label class="labels">تلگرام</label><input type="text"
                                                                                              name="telegram"
                                                                                              class="form-control"
                                                                                              placeholder="تلگرام..."
                                                                                              value="{{ $doctor->telegram }}">
                            </div>
                            <div class="col-md-12"><label class="labels">فیس بوک</label><input type="text"
                                                                                               name="facebook"
                                                                                               class="form-control"
                                                                                               placeholder="فیسبوک..."
                                                                                               value="{{ $doctor->facebook }}">
                            </div>
                            <div class="col-md-12"><label class="labels">سابقه کاری</label><input type="text"
                                                                                                  name="year"
                                                                                                  class="form-control"
                                                                                                  placeholder="سابقه کاری ..."
                                                                                                  value="{{ $doctor->year }}">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">عکس </label>
                                <input type="file" name="image"
                                       class="form-control"
                                       value="">
                            </div>
                            @error('image')
                            <span class="text-danger">
                                {{ $message }}
                            </span>


                            @enderror

                            <div class="col-md-12"><label class="labels">شهر</label><input type="text" name="city"
                                                                                           class="form-control"
                                                                                           placeholder="شهر ..."
                                                                                           value="{{ $doctor->city }}">
                            </div>
                            <div class="col-md-12"><label class="labels">توضیحات کوتاه</label>
                                <textarea name="short_description" id="" cols="30" rows="10"
                                          class="form-control form-control-sm" placeholder="توضیحات کوتاه ...">
                                {{ $doctor->short_description }}
                            </textarea>
                            </div>
                            <label for="" class="mt-3">جنبسیت خود را انتخاب کنید</label>
                            <select name="gender_id" id="" class="form-control mt-3">
                                @foreach($genders as $gender)
                                    <option value="{{ $gender->id }}" {{$doctor->gender_id == $gender->id ? "selected" : "" }}">{{ $gender->name }}</option>
                                @endforeach
                            </select>
                            <label for="" class="mt-3">تخصص خود را انتخاب کنید</label>
                            <select name="expertise_id" id="" class="form-control mt-3">
                                @foreach($expertises as $expertise)
                                    <option value="{{ $expertise->id }}" {{$doctor->expertise_id == $expertise->id ? "selected" : "" }}>{{ $expertise->name }}</option>
                                @endforeach
                            </select>
                            <div class="col-md-12"><label class="labels">توضیحات کامل</label>
                                <textarea name="description" id="" cols="30" rows="10"
                                          class="form-control form-control-sm" placeholder="توضیحات ...">
                                  {{ $doctor->description }}
                            </textarea>
                            </div>

                            <div class="col-md-12"><label class="labels">آدرس</label>
                                <textarea name="address" id="" cols="30" rows="10"
                                          class="form-control form-control-sm">
                                  {{ $doctor->address }}
                            </textarea>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">ذخیره تغییرات</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('profile.jpg') }}" alt="" class="img-fluid mt-5">
                </div>
            </div>
        </div>

    </form>
@endsection
