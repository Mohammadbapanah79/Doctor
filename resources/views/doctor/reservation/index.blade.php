@extends('doctor.layouts.master')

@section('head-tag')
    <title>رزرو های من</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('doctor.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش پزشک</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> رزرو های من</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        رزرو ها
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    {{--                    <a href="{{ route('doctor.reserves.create') }}" class="btn btn-info btn-sm">ایجاد--}}
                    {{--                        رزرو جدید</a>--}}
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام بیمار</th>
                            <th>نام خانوادگی بیمار</th>
                            <th>تاریخ مراجعه</th>
                            <th>ساعت مراجعه</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reserves as $key=>$reserve)
                            <tr>
                                <th>{{ $reserve->firstItem+$key+1 }}</th>
                                <td>
                                    {{ $reserve->patient->name }}
                                </td>
                                <td>   {{ $reserve->patient->lastname }}</td>
                                <td>
                                    {{ $reserve->date }}
                                </td>
                                <td>
                                    {{ $reserve->time }}
                                </td>
                                <td>
                                    <form action="{{ route('doctor.changeStatusReserve',$reserve->id) }}">

                                        @if($reserve->status == 1)
                                            <form method="get" action="{{route('doctor.changeStatusReserve',$reserve->id)}}">
                                                @csrf
                                                <button class="btn btn-success" type="submit" value="0">تایید</button>
                                            </form>
                                        @else
                                            <form method="get" action="{{route('doctor.changeStatusReserve',$reserve->id)}}">
                                                @csrf
                                                <button class="btn btn-danger" type="submit" value="1">عدم تایید
                                                </button>
                                            </form>
                                        @endif
                                    </form>
                                </td>
                                <td class="width-16-rem text-left">
                                    {{--                                    <a href="{{ route('admin.reserves.edit',$reserve->id) }}"--}}
                                    {{--                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>--}}
                                    <form action="{{ route('doctor.reserves.destroy',$reserve->id) }}"
                                          method="post" style="display: inline-block">
                                        @method('delete')
                                        @csrf
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
    </section>

@endsection
