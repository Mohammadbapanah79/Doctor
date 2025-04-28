@extends('admin.layouts.master')

@section('head-tag')
    <title>پزشکان</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش کاربران</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> پزشکان</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">


                <section class="table-responsive">
                    <table class="table table-striped table-hover" style="width: 5000px">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام پزشک</th>
                            <th>نام خانوادگی پزشک</th>
                            <th>تخصص پزشک</th>
                            <th>آدرس پزشک</th>
                            <th>شماره تماس</th>
                            <th>آدرس ایمیل</th>
                            <th>شماره ثابت</th>
                            <th>آدرس اینستاگرام</th>
                            <th>آدرس تلگرام</th>
                            <th>آدرس فیس بوک</th>
                            <th>تصویر</th>
                            <th>سابقه</th>
                            <th>شهر</th>
                            <th>توضیحات کوتاه</th>
                            <th>توضیحات کامل</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($doctors as $key=>$doctor)
                            <tr>
                                <th>{{ $doctor->firstItem+$key+1 }}</th>
                                <td>
                                    @if($doctor->name==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {{$doctor->name}}
                                    @endif
                                </td>
                                <td>
                                    @if($doctor->lastname==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {{ $doctor->lastname }}
                                    @endif

                                </td>
                                <td>
                                  {{ $doctor->expertise->name }}

                                </td>
                                <td>

                                    @if($doctor->address==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {!! \Illuminate\Support\Str::limit($doctor->address, 150, $end='...') !!}
                                    @endif

                                </td>
                                <td>
                                    @if($doctor->phone==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{"تکمیل نشده"}}
                                        </span>
                                    @else
                                        {{ $doctor->phone }}
                                    @endif
                                </td>
                                <td>
                                    @if($doctor->email==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {{ $doctor->email }}
                                    @endif
                                </td>
                                <td>
                                    @if($doctor->fixed_phone==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {{ $doctor->fixed_phone }}
                                    @endif

                                </td>
                                <td>
                                    @if($doctor->instagram==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {{ $doctor->instagram }}
                                    @endif

                                </td>
                                <td>
                                    @if($doctor->telegram==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {{ $doctor->telegram }}
                                    @endif


                                </td>

                                <td>
                                    @if($doctor->facebook==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده " }}
                                        </span>
                                    @else
                                        {{ $doctor->facebook }}
                                    @endif
                                </td>
                                <td>
                                    @if($doctor->image==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>

                                    @else
                                        <img src="{{ asset('uploads/'.$doctor->image) }}" alt="" width="80">
                                    @endif
                                </td>
                                <td>
                                    @if($doctor->year==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده " }}
                                        </span>
                                    @else
                                        {{ $doctor->year }}
                                    @endif

                                </td>
                                <td>
                                    @if($doctor->city==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>

                                    @else
                                        {{ $doctor->city }}
                                    @endif
                                </td>
                                <td>
                                    @if($doctor->short_description==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {!! \Illuminate\Support\Str::limit($doctor->short_description, 150, $end='...') !!}
                                    @endif

                                </td>
                                <td>
                                    @if($doctor->description==null)
                                        <span class="text-danger" style="font-size: 12px">
                                            {{ "تکمیل نشده" }}
                                        </span>
                                    @else
                                        {!! \Illuminate\Support\Str::limit($doctor->description, 150, $end='...') !!}
                                    @endif
                                </td>
                                <td>

                                    @if($doctor->status==0)
                                        <form action="{{ route('admin.changeDoctorStatus',$doctor->id) }}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                تایید نشده
                                            </button>
                                        </form>

                                    @else

                                        <form action="{{ route('admin.changeDoctorStatus',$doctor->id) }}" method="get">
                                            @csrf
                                            <button type="submit" class="btn btn-success">
                                                تایید
                                            </button>
                                        </form>
                                    @endif

                                </td>
                                <td class="width-22-rem text-left">
                                    {{--                                    <a href=""--}}
                                    {{--                                       class="btn btn-primary btn-sm"><i--}}
                                    {{--                                            class="fa fa-edit"></i> ویرایش</a>--}}
                                    <a href="{{ route('admin.doctors.show',$doctor->id) }}"
                                       class="btn btn-warning btn-sm mt-2"><i
                                            class="fa fa-edit"></i> مشاهده دقیق مشخصات </a>
                                    <form style="display: inline-block"
                                          action="{{ route('admin.doctors.destroy',$doctor->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm delete mt-2" type="submit"><i
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
