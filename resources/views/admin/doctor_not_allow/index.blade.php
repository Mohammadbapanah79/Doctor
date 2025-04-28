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
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کاربری</th>
                            <th>ایمیل</th>
                            <th>وضعیت</th>

                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key=>$user)
                            <tr>
                                <th>{{ $user->firstItem+$key+1 }}</th>
                                <td>
                                    {{$user->username}}
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->is_active == 1)
                                        <form method="post" action="{{route('admin.changeUserStatus',$user->id)}}">
                                            @csrf
                                            <button class="btn btn-success" type="submit" value="0">تایید</button>
                                        </form>
                                    @else
                                        <form method="post" action="{{route('admin.changeUserStatus',$user->id)}}">
                                            @csrf
                                            <button class="btn btn-danger" type="submit" value="1">عدم تایید</button>
                                        </form>
                                    @endif
                                </td>


                                <td class="width-22-rem text-left">
                                    {{--                                    <a href=""--}}
                                    {{--                                       class="btn btn-primary btn-sm"><i--}}
                                    {{--                                            class="fa fa-edit"></i> ویرایش</a>--}}
                                    <form style="display: inline-block" action="{{ route('admin.docStatus.destroy',$user->id) }}" method="post">
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
    </section>

@endsection
