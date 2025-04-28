{{--
@extends('admin.layouts.master')

@section('head-tag')
    <title>منو</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">منو</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> ایجاد منو</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        ایجاد منو
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.menus.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section>
                    <form action="{{ route('admin.menus.store') }}" method="post">
                        @csrf
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">عنوان منو</label>
                                    <input type="text" class="form-control form-control-sm" name="title">
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
                                    <label for="">منو والد</label>
                                    <select name="parent_id" id="" class="form-control form-control-sm">

                                        <option value="0">دسته والد</option>
                                        @foreach($menus as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('parent_id')

                                    <span class="text-danger">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                    @enderror
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">آدرس URL</label>
                                    <input type="text" class="form-control form-control-sm" name="link">
                                </div>
                                @error('link')

                                <span class="text-danger">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                                @enderror
                            </section>

                        </section>
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </form>
                </section>


            </section>

        </section>
    </section>


@endsection
--}}
@extends('admin.layouts.master')
@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-10 offset-md-1 mt-4 rounded">
            <div class="card">
                <div class="card-header">
                    <h5>مدیریت منوها</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="mb-4 text-center text-white p-4" style="background-color: #0090cc;">ایجاد منوی جدید</h5>
                            <form action="{{ route('admin.menus.store')}}" method="post">
                                @csrf
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger  alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        @foreach($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success  alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control">
                                        </div>
    @error('title')
    <span class="text-danger">
    {{ $message }}
    </span>
    @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>لینک</label>
                                            <input type="text" name="link" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>انتخاب منوی والد</label>
                                            <select class="form-control" name="parent_id">
                                                <option selected disabled>منوی والد</option>
                                                @foreach($allMenus as $key => $value)
                                                    <option value="{{ $key }}">{{ $value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn text-white" style="background-color: #404e67">ذخیره تغییرات</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-center mb-4 text-white p-4" style="background-color: #404e67">لیست منوها</h5>
                            <ul id="tree1">
                                @foreach($menus as $menu)
                                    <li>
                                        {{ $menu->title }}
                                        @if(count($menu->childs))
                                            @include('manageChild',['childs' => $menu->childs])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{--<script src="/js/treeview.js"></script>--}}
