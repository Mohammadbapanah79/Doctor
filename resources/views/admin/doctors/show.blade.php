@extends('admin.layouts.master')

@section('head-tag')
    <title>پزشکان</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css">

    <style>
        .icon-box.medium {
            font-size: 20px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }
        .icon-box {
            font-size: 30px;
            margin-bottom: 33px;
            display: inline-block;
            color: #ffffff;
            height: 65px;
            width: 65px;
            line-height: 65px;
            background-color: #59b73f;
            text-align: center;
            border-radius: 0.3rem;
        }
        .social-icon-style2 li a {
            display: inline-block;
            font-size: 14px;
            text-align: center;
            color: #ffffff;
            background: #59b73f;
            height: 41px;
            line-height: 41px;
            width: 41px;
        }
        .rounded-3 {
            border-radius: 0.3rem !important;
        }

        .social-icon-style2 {
            margin-bottom: 0;
            display: inline-block;
            padding-left: 10px;
            list-style: none;
        }

        .social-icon-style2 li {
            vertical-align: middle;
            display: inline-block;
            margin-right: 5px;
        }

        a, a:active, a:focus {
            color: #616161;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        .text-secondary, .text-secondary-hover:hover {
            color: #59b73f !important;
        }
        .display-25 {
            font-size: 1.4rem;
        }

        .text-primary, .text-primary-hover:hover {
            color: #ff712a !important;
        }

        p {
            margin: 0 0 20px;
        }

        .mb-1-6, .my-1-6 {
            margin-bottom: 1.6rem;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 wow fadeIn">
                <div class="card border-0 shadow">
                    <img src="{{ asset('uploads/'.$doctor->image) }}" alt="...">
                    <div class="card-body p-1-9 p-xl-5">
                        <div class="mb-4">
                            <h3 class="h4 mb-0">{{ $doctor->name }}   {{ $doctor->lastname }}</h3>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="far fa-envelope display-25 me-3 text-secondary"></i>{{ $doctor->email }}</li>
                            <li class="mb-3"><i class="fas fa-mobile-alt display-25 me-3 text-secondary"></i>{{ $doctor->phone }}</li>
                            <li><i class="fas fa-map-marker-alt display-25 me-3 text-secondary"></i>{{ $doctor->city }}</li>
                        </ul>
                        <ul class="social-icon-style2 ps-0">
                            <li><a href="facebook.com/{{ $doctor->facebook }}" class="rounded-3"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="t.me/{{ $doctor->telegram }}" class="rounded-3"><i class="fab fa-telegram"></i></a></li>
                            <li><a href="instagram.com/{{ $doctor->instagram }}" class="rounded-3"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ps-lg-1-6 ps-xl-5">
                    <div class="mb-5 wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="h1 mb-0 text-primary">توضیحات</h2>
                        </div>
                        <p>
                            {{ $doctor->short_description }}
                        </p>
                    </div>
                    <div class="mb-5 wow fadeIn">
                        <div class="text-start mb-1-6 wow fadeIn">
                            <h2 class="mb-0 text-primary">
                                توضیحات کامل
                            </h2>
                            <p>
                                {{ $doctor->description }}
                            </p>
                        </div>
                        <div class="row mt-n4">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
