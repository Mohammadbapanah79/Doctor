@extends('admin.layouts.master')

@section('head-tag')
    <title>سوالات متداول</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"><a href="{{ route('admin.home') }}">خانه</a></li>
            <li class="breadcrumb-item font-size-12"><a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> سوالات متداول</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        سوالات متداول
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.faqs.create') }}" class="btn btn-info btn-sm">ایجاد سوال جدید</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>پرسش</th>
                            <th>خلاصه پاسخ</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($faqs as $key=>$faq)
                            <tr>
                                <th>{{$faq->firstItem+$key+1 }}</th>
                                <td>{!! $faq->title !!}</td>
                                <td>{!! $faq->body !!}</td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.faqs.edit',$faq->id) }}"
                                       class="btn btn-primary btn-sm"><i
                                            class="fa fa-edit"></i> ویرایش</a>
                                    <form action="{{ route('admin.faqs.destroy',$faq->id) }}" method="post"
                                          style="display: inline-block">
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
        <nav class="col-xs-12 text-center" aria-label="Page navigation" style="margin: 0 auto;">
            <ul class="pagination">
                {{ $faqs->links('vendor.pagination.bootstrap-4') }}
            </ul>
        </nav>
    </section>

@endsection
