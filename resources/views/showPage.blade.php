@extends('theme.layouts.master')
@section('head')
    <title>
        {{ $page->title }}
    </title>
@endsection

@section('main')
    <div class="main-banner-blog">
        <div class="page-banner-area item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>
                                {{ $page->title }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="" alt="">
            </div>

        </div>
        <hr>
        <p class="text-center">
            {!! $page->body !!}

        </p>
    </div>
@endsection
