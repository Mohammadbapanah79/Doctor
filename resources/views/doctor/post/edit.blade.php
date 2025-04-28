@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پست</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">پست</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد پست</li>
        </ol>
    </nav>
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ویرایش پست
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.posts.update',$post->id) }}" method="post"
                          enctype="multipart/form-data">
                        <section class="row">
                            @csrf
                            @method('put')
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">عنوان پست</label>
                                    <input type="text" value="{{ $post->title }}" class="form-control form-control-sm"
                                           name="title">
                                </div>
                                @error('title')

                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">انتخاب دسته</label>
                                    <select name="category_id" id="post_category"
                                            class="form-control form-control-sm">
                                        <option value="">دسته را انتخاب کنید</option>
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }}" {{$post->category_id == $category->id ? "selected" : "" }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تصویر </label>
                                    <input type="file" value="{{ $post->image }}" class="form-control form-control-sm"
                                           name="image">
                                </div>
                                @error('image')

                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                @enderror
                            </section>


                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">متن پست</label>
                                    <textarea name="body" id="body" class="form-control form-control-sm"
                                              rows="6">
                                        {{ $post->body }}
                                    </textarea>
                                </div>
                                @error('body')

                                <span class="text-danger">
                                    {{ $message }}
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
        CKEDITOR.replace('body');
    </script>

@endsection
