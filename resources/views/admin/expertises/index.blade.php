@extends('admin.layouts.master')

@section('head-tag')
    <title>تخصص ها</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> تخصص ها</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تخصص
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.expertises.create',) }}" class="btn btn-info btn-sm">ایجاد تخصص
                    </a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام تخصص</th>
                            <th>نام اینگلیسی تخصص</th>
                            <th>آیکن</th>
                            <th>تصویر آیکن</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($expertises as $key=>$expertise)
                            <tr>
                                <th>{{ $expertise->firstItem+$key+1 }}</th>
                                <th>{{ $expertise->name }}</th>
                                <th>{{ $expertise->label }}</th>
                                <th>
                                    @if($expertise->icon!==null)
                                        {{ $expertise->icon }}
                                    @else
                                        <span class="text-danger">
                                        {{ "آیکنی وارد نشده است." }}
                                    </span>
                                    @endif
                                </th>
                                <th>
                                    <img src="{{ asset('uploads/'.$expertise->image) }}" alt="" width="80">
                                </th>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.expertises.edit',$expertise->id) }}"
                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>ویرایش</a>
                                    <form action="{{ route('admin.expertises.destroy',$expertise->id) }}"
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
