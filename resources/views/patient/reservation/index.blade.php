@extends('patient.layouts.master')

@section('head-tag')
    <title>رزرو های من</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('patient.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش بیمار</a></li>
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

                {{--                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                                    <a href="{{ route('patient.reserves.create') }}" class="btn btn-info btn-sm">ایجاد
                                        رزرو جدید</a>
                                    <div class="max-width-16-rem">
                                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                                    </div>
                                </section>--}}

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام پزشک</th>
                            <th>تخصص پزشک</th>
                            <th>تاریخ مراجعه</th>
                            <th>ساعت مراجعه</th>
                            <th>وضعیت</th>
                            {{--                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reserves as $key=>$reserve)
                            <tr>
                                <th>{{ $reserve->firstItem+$key+1 }}</th>
                                <td>{{ $reserve->doctor->name }}  {{ $reserve->doctor->lastname }}</td>
                                <td>{{ $reserve->doctor->expertise->name }}</td>
                                <td>{{ $reserve->date }}</td>
                                <td>{{ $reserve->time }}</td>
                                <td>
                                    @if($reserve->status==0)
                                        {{ " در انتظار تایید پزشک" }}

                                    @else

                                        {{ "تایید شده" }}
                                    @endif
                                </td>
                                {{--  <td class="width-16-rem text-left">
                                      <a href="{{ route('patient.reserves.edit',$reserve->id) }}"
                                         class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                      <form action="{{ route('patient.reserves.destroy',$reserve->id) }}"
                                            method="post" style="display: inline-block">
                                          @method('delete')
                                          @csrf
                                          <button class="btn btn-danger btn-sm" type="submit"><i
                                                  class="fa fa-trash-alt"></i>
                                              حذف
                                          </button>
                                      </form>
                                  </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
            </section>
        </section>
    </section>

@endsection
