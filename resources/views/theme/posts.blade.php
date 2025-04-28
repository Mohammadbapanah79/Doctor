@extends('theme.layouts.master')
@section('head-tag')
    <title>صفحه اصلی</title>
@endsection
@section('main')
    <main>
        <section class="sec-posts-1 pb-5">
            <div class="container header">
                <h2 class="text-center">مقالات</h2><span class="line mb-5"> </span>
            </div>
            <div class="container pb-5">
                <div class="row mt-5 mb-4">
                    @foreach($posts as $post)
                        @if($post->status==1)
                            <div class="card mb-3">
                                <div class="row p-0">
                                    <div class="col-md-8 p-0 d-flex flex-column">
                                        <div class="d-flex p-2"><a class="user-image" href="doctor.blade.php"><img
                                                    class="img-fluid" src="{{ asset('uploads/'.$post->image) }}"
                                                    alt="..."/></a><a class="text-dark user-name pt-1"
                                                                      href="{{ route('singlePost',$post->id) }}"><small
                                                    class="d-block mx-2">post by </small><span
                                                    class="d-block mx-2">{{ $post->user->email }}</span></a></div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <div class="category-type my-2"><span>دسته بندی : </span><span
                                                    class="badge bg-info text-light">{{ $post->category->title }}</span>
                                            </div>
                                            <p class="card-text">
                                                {!! $post->body !!}
                                            </p>
                                        </div>
                                        <div class="card-footer d-flex justify-content-between"><a class="text-dark"
                                                                                                   href="{{ route('singlePost',$post->id) }}">read
                                                more </a><span class="mt-1">
{{--                      <div class="btn btn-sm btn-info rounded-pill text-light position-relative px-3 mx-2"> <i--}}
{{--                              class="fas fa-comment"></i><span--}}
{{--                              class="position-absolute top-75 end-50 translate-middle badge rounded-pill bg-danger">--}}

{{--                              <span--}}
{{--                                  class="visually-hidden">comments</span>--}}

{{--                          {{ \App\Models\Comment::query()->where('post_id','id')->count() }}--}}
{{--                          </span></div>--}}
                      <time data-time="2021-15-10"><small>
                              {{ $post->created_at }}
                          </small><small class="mx-2">  <i class="fad fa-calendar-alt"></i></small></time></span></div>
                                    </div>
                                    <div class="col-md-4 p-0"><img class="img-fluid"
                                                                   src="{{ asset('uploads/'.$post->image) }}"
                                                                   alt="..."/></div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section class="sec-posts-2">
            <div class="container my-5">
                <nav class="d-flex justify-content-center" aria-label="...">
                    <ul class="pagination">
                        <li class="page-item"><span class="page-link">قبل</span></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
    @include('theme.layouts.footer')
@endsection


