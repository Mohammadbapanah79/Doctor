@extends('doctor.layouts.master')

@section('head-tag')
    <title>پست ها</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('doctor.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page">پست ها</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        پست ها
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('doctor.posts.create') }}" class="btn btn-info btn-sm">ایجاد پست </a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان پست</th>
                            <th>دسته</th>
                            <th>تصویر</th>
                            <th>وضعیت</th>
                            <th>نویسنده</th>
                            <th>تاریخ انتشار</th>

                                                        <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $key=>$post)
                            <tr>
                                <th> {{ $post->firstItem+$key+1 }}</th>
                                <td>{{ $post->title }}</td>
                                <td>
                                    {{ $post->category->title }}
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/'.$post->image) }}" alt="image" width="100">

                                </td>
                                <td>
                                    @if($post->status == 1)
                                        <span class="text-success">
                                            {{ "تایید شده" }}
                                        </span>
                                    @else
                                        <span class="text-danger">
                                       {{ "تا زمانی که پست تایید نشده است میتوانید پست را حذف کنید " }}
                                          </span>
                                    @endif

                                </td>
                                <td>{{ $post->user->username }}</td>
                                <td>{{ $post->created_at }}</td>


                                <td class="width-16-rem text-left">
                                    {{--                                    <a href="{{ route('admin.posts.edit',$post->id) }}"--}}
                                    {{--                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>--}}
                                    @if($post->status==0)
                                        <form action="{{ route('doctor.posts.destroy',$post->id) }}" method="post"
                                              style="display: inline-block">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm delete" type="submit"><i
                                                    class="fa fa-trash-alt"></i>
                                                حذف
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>

            </section>
        </section>
    </section>

@endsection
