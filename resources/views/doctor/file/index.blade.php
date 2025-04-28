@extends('doctor.layouts.master')

@section('head-tag')
    <title>دسته بندی</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href=""> خانه/</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#"> بخش محتوی </a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> دسته بندی</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        فایل
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                                        <a href="{{ route('doctor.files.create') }}" class="btn btn-info btn-sm">ایجاد فایل
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
                            <th>فایل</th>

                            {{--                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($files as $key=>$file)
                            <tr>
                                <th>{{$file->firstItem+$key+1 }}</th>
                                <td>
                                    <a href="{{ asset('files/'.$file->file) }}" class="btn btn-warning" download>دانلود
                                        فایل</a>
                                </td>

                                <td class="width-16-rem text-left">
                                    <a href="{{ route('doctor.files.edit',$file->id) }}"
                                       class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>آپلود فایل</a>
                                    {{-- <form action="{{ route('doctor.files.destroy',$file->id) }}"
                                           method="post" style="display: inline-block">
                                         @method('delete')
                                         @csrf
                                         <button class="btn btn-danger btn-sm delete" type="submit"><i
                                                 class="fa fa-trash-alt"></i>
                                             حذف
                                         </button>


                                     </form>--}}
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

