@extends('admin.layouts.master')

@section('head-tag')
    <title>نظرات</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}"> خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> نظرات</li>
        </ol>
    </nav>
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        نظرات
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="#" class="btn btn-info btn-sm disabled">ایجاد نظر </a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نویسنده نظر</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <th>{{ $comment->id }}</th>
                                <td>{{ $comment->user->email }}</td>
                                <td>
                                    @if($comment->status == 1)
                                        <form method="get" action="{{route('admin.changeCommentStatus',$comment->id)}}">
                                            @csrf
                                            <button class="btn btn-success" type="submit" value="0">تایید</button>
                                        </form>
                                    @else
                                        <form method="get" action="{{route('admin.changeCommentStatus',$comment->id)}}">
                                            @csrf
                                            <button class="btn btn-danger" type="submit" value="1">عدم تایید</button>
                                        </form>
                                    @endif
                                </td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.comments.show',$comment->id) }}"
                                       class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i> نمایش</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </section>
            </section>
        </section>
        <nav class="col-xs-12 text-center" aria-label="Page navigation" style="margin: 0 auto;">
            <ul class="pagination">
                {{ $comments->links('vendor.pagination.bootstrap-4') }}
            </ul>
        </nav>
    </section>
@endsection
