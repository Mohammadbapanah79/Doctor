@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد اسلایدر</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">اسلایدر</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">ایجاداسلایدر</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش اسلایدر
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.sliders.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.sliders.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                        <section class="row">
                            @csrf
                            @method('put')
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">عنوان اسلایدر</label>
                                    <input type="text" value="{{ $slider->title }}" class="form-control form-control-sm" name="title">
                                </div>
                                @error('title')
                                <span class="text-danger">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>

                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">لینک اسلایدر</label>
                                    <input type="text" value="{{ $slider->link }}" class="form-control form-control-sm" name="link">
                                </div>
                                @error('link')
                                <span class="text-danger">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>

                                @enderror
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تصویر </label>
                                    <input type="file" class="form-control form-control-sm" name="image">
                                </div>
                                <img src="{{ asset('uploads/'.$slider->image) }}" alt="" width="80">
                                @error('image')
                                <span class="text-danger">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>

                                @enderror
                            </section>
                            <section class="col-12">
                                <button class="btn btn-primary btn-sm">ویرایش</button>
                            </section>
                        </section>
                    </form>
                </section>

            </section>
        </section>
    </section>

@endsection

@section('script')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>

@endsection
