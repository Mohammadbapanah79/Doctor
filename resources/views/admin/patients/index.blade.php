@extends('admin.layouts.master')

@section('head-tag')
    <title>بیماران</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش بیماران</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> بیماران</li>
        </ol>
    </nav>
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        مدیریت بیماران
                    </h5>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    {{--                    <a href="{{ route('admin.patients.create') }}" class="btn btn-info btn-sm"> بیمار جدید</a>--}}
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>شماره موبایل</th>
                            <th>ایمیل</th>
                            <th>شماره پاسپورت</th>
                            <th>عکس</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($patients as $key=>$patient)
                            <tr>
                                <th>{{ $patient->firstItem+$key+1 }}</th>
                                <td>
                                    @if($patient->name==null)
                                        <span class="text-danger" style="font-size: 12px">
                                           مقداری وارد نشده است
                                       </span>
                                    @else
                                        {{ $patient->name }}
                                    @endif</td>
                                <td>
                                    @if($patient->lastname==null)
                                        <span class="text-danger" style="font-size: 12px">
                                           مقداری وارد نشده است
                                       </span>
                                    @else
                                        {{ $patient->lastname }}
                                    @endif
                                </td>
                                <td>
                                    @if($patient->phone==null)
                                        <span class="text-danger" style="font-size: 12px">
                                           مقداری وارد نشده است
                                       </span>
                                    @else
                                        {{ $patient->phone }}
                                    @endif
                                </td>
                                <td>

                                    @if($patient->email==null)
                                        <span class="text-danger" style="font-size: 12px">
                                           مقداری وارد نشده است
                                       </span>
                                    @else
                                        {{ $patient->phone }}
                                    @endif
                                </td>
                                <td>


                                    @if($patient->pass_number==null)
                                        <span class="text-danger" style="font-size: 12px">
                                           مقداری وارد نشده است
                                       </span>
                                    @else
                                        {{ $patient->phone }}
                                    @endif

                                </td>
                                <td>
                                    @if($patient->image==null)
                                        <span class="text-danger" style="font-size: 12px">
                                           مقداری وارد نشده است
                                       </span>
                                    @else
                                        <img src="{{ asset('uploads/'.$patient->image) }}" alt="" width="80">
                                    @endif
                                </td>

                                <td class="width-22-rem text-left">
                                    <a href=""
                                       class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i> ویرایش</a>
                                    <form style="display: inline-block" action="{{ route('admin.patients.destroy',$patient->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm delete" type="submit"><i
                                                class="fa fa-trash-alt"></i>
                                            حذف
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            @include('alert.nothing-data')
                        @endforelse
                        </tbody>
                    </table>
                </section>
            </section>
        </section>
    </section>
@endsection
