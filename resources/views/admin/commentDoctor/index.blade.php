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
                            <th>برای دکتر</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($doctorComments as $key=>$doctorComment)
                            <tr>
                                <th>{{ $doctorComment->firstItem+$key+1 }}</th>
                                <td>{{ $doctorComment->user->email }}</td>
                                <td>{{ $doctorComment->doctor->name }}  {{ $doctorComment->doctor->lastname }}</td>
                                <td>
                                    @if($doctorComment->status == 1)
                                        <form method="get" action="{{route('admin.changeDoctorCommentStatus',$doctorComment->id)}}">
                                            @csrf
                                            <button class="btn btn-success" type="submit" value="0">تایید</button>
                                        </form>
                                    @else
                                        <form method="get" action="{{route('admin.changeDoctorCommentStatus',$doctorComment->id)}}">
                                            @csrf
                                            <button class="btn btn-danger" type="submit" value="1">عدم تایید</button>
                                        </form>
                                    @endif
                                </td>
                                <td class="width-16-rem text-left">
                                    <a href="" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i> نمایش</a>
                                    <form action="{{ route('admin.doctorComments.destroy',$doctorComment->id) }}" method="post"
                                          style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm delete" type="submit"><i
                                                class="fa fa-trash-alt"></i>
                                            حذف
                                        </button>
                                    </form>

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
                {{ $doctorComments->links('vendor.pagination.bootstrap-4') }}
            </ul>
        </nav>
    </section>
@endsection
