@extends('admin.layouts.master')

@section('head-tag')
    <title> سوالات متداول</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">پیج ساز</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد پیج</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد پیج
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.faqs.update',$faq->id) }}" method="post">
                        @csrf
                        @method('put')
                        <section class="row">

                            <section class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="">عنوان </label>
                                    <input type="text" value="{{ $faq->title }}" class="form-control form-control-sm" name="title">
                                </div>

                                @error('title')
                                <span class="alert-danger">
                                <strong>
                                    {{ $message }}
                                </strong>
                                    </span>
                                @enderror
                            </section>

                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">محتوی</label>
                                    <textarea name="body" id="body" class="form-control form-control-sm"
                                              rows="6">
                                        {{  $faq->body }}
                                    </textarea>
                                </div>

                                @error('body')
                                <span class="alert-danger">
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
@section('script')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>

@endsection
