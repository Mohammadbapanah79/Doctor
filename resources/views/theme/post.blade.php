@extends('theme.layouts.master')
@section('head-tag')
    <title>صفحه اصلی</title>
@endsection


@section('main')
    <main>
        <div class="container my-5">
            <div class="sec-post-1">
                <div class="card post">
                    <div class="author text-dark bg-light d-flex p-2"><a href="/doctor.html">
                            <div class="author-image"><img src="{{ asset('uploads/'.$post->image) }}" alt=""/></div>
                        </a>
                        <div class="d-flex flex-column mt-3 mx-1 align-self-center">
                            <div class="post-author"><small>
                                    {{ $post->user->username }}
                                </small></div>
                            <time data-time="2020-15-05">
                                {{ $post->created_at }}
                            </time>
                        </div>
                    </div>
                    <div class="card-image"><img src="{{ asset('uploads/'.$post->image) }}" alt=""/></div>
                    <div class="card-body col-12">
                        <h5 class="card-title post-title fw-bold mb-3">{{ $post->title }}</h5>
                        <p class="card-text">
                            {!! $post->body !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="comments my-5">
                <h3 class="fw-bold">افزودن کامنت</h3>
                @if(auth()->check())
                <form class="send-comment p-3" action="{{ route('comment.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">comment</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                  placeholder="نظر شما پس از تایید ادمین نمایش داده خواهد شد"></textarea>
                        @error('description')
                        <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <button class="btn w-100" type="submit">send</button>
                </form>

                @else
                    <div class="alert alert-danger">
                        {{ "برای افزودن کامنت باید لاگین باشید" }}
                    </div>
                @endif
                @foreach($comments as $comment)
                    @if($comment->status==1)
                        <div class="mb-5 d-flex flex-column justify-content-around align-items-start">
                            <div class="comment w-100 border-top mt-5 pt-5">
                                <div class="author">
                                    <div class="author-image"><img src="{{ asset('theme/images/avatar.png') }}" alt=""/>
                                    </div>
                                    <div class="title my-2">
                                        {{ auth()->user()->email }}
                                    </div>
                                </div>
                                <time data-time="2021-10-03">2021-10-03</time>
                                <p class="comment-content">
                                    {{ $comment->description }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>
    </main>
    @include('theme.layouts.footer')
@endsection



