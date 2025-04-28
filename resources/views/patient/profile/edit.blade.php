@extends('patient.layouts.master')

@section('head-tag')
    <title>ایجاد پست</title>
@endsection
@section('head-tag')
    <style>

    </style>
@endsection
@section('content')
    <form action="{{ route('patient.profile.update',$patient->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="container bg-white mt-5 mb-5 border-radius-15px">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img src="{{ asset('uploads/'.$patient->image) }}" alt="image" width="100">
                        <span
                            class="font-weight-bold">


                    </span>
                        <span
                            class="text-black-50"></span><span> </span></div>
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
                                                                                          value="{{ $patient->name }}">
                            </div>
                            <div class="col-md-6"><label class="labels">نام خانوادگی</label>
                                <input type="text" name="lastname"
                                       class="form-control" value="{{ $patient->lastname }}"
                                       placeholder="نام خانوادگی ...">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">شماره موبایل</label><input type="text"
                                                                                                    name="phone"
                                                                                                    class="form-control"
                                                                                                    placeholder="شماره همراه ..."
                                                                                                    value="{{ $patient->phone }}">
                            </div>
                            <div class="col-md-12"><label class="labels">ایمیل</label><input type="text" name="email"
                                                                                             class="form-control"
                                                                                             placeholder="ایمیل ..."
                                                                                             value="{{ $patient->email }}">
                            </div>
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-12">

                            </div>
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-12">
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
                            <div class="col-md-12">
                            </div>
                            <div class="col-md-12">

                            </div>
                            <div class="col-md-12">

                            </div>

                            <div class="col-md-12"><label class="labels">آدرس</label>
                                <textarea name="address" id="" cols="30" rows="10"
                                          class="form-control form-control-sm">
{{ $patient->address }}
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
