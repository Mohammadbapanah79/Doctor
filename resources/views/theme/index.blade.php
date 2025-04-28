@extends('theme.layouts.master')
@section('head-tag')
    <title>صفحه اصلی</title>
@endsection

@section('main')

    <main>
        <section class="sec-1" id="home-slider">

            <div class="item container">
                <div class="row align-items-center justify-content-around">
                    <div
                        class="right col-12 col-lg-6 d-flex flex-column align-items-center flex-column align-items-lg-start order-1 order-lg-0 mt-5">
                        <h2 class="text-center text-lg-start">
                            دکتر را جستجو کنید و قرار ملاقات بگذارید<span class="d-block mt-3">بهترین پزشکان ، کلینیک و بیمارستان نزدیکترین شهر را کشف کنید</span>
                        </h2>
                        <div class="row justify-content-center justify-content-lg-start mt-3 w-75 ">
                            <form class="col-12 order-1 order-lg-0">
                                <div class="input-group mb-3">
                                    <span class="text-light">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium commodi,
                                    consequuntur corporis ea eligendi error harum incidunt inventore ipsum laboriosam
                                    laborum nesciunt non quis sint sit totam vel veritatis voluptates!
                                    </span>
                                    {{--                                    <input class="form-control p-3 p-lg-2" type="text" placeholder="جستجوی پزشک"--}}
                                    {{--                                           aria-label="Recipient's username" aria-describedby="button-addon1"--}}
                                    {{--                                           name="keyword"/>--}}
                                    {{--                                    <button class="btn btn-outline-light p-3 p-lg-2 px-lg-3" id="button-addon1"--}}
                                    {{--                                            type="submit"><i class="fas fa-search-location"></i></button>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div
                        class="left col-12 col-lg-4 d-flex flex-column justify-content-center mt-5 order-0 order-lg-1">
                        <img src="{{ asset('theme/images/1.png') }}" alt=""/></div>
                </div>
            </div>
            {{--                <div class="item container">--}}
            {{--                    <div class="row align-items-center justify-content-around">--}}
            {{--                        <div--}}
            {{--                            class="right col-12 col-lg-6 d-flex flex-column align-items-center flex-column align-items-lg-start order-1 order-lg-0 mt-5">--}}
            {{--                            <h2 class="text-center text-lg-start">--}}
            {{--                                دکتر را جستجو کنید و قرار ملاقات بگذارید <span class="d-block mt-3">--}}
            {{--                     بهترین پزشکان ، کلینیک و بیمارستان نزدیکترین شهر را کشف کنید</span></h2>--}}
            {{--                            <div class="row justify-content-center justify-content-lg-start mt-3">--}}
            {{--                                <form class="col-12 order-1 order-lg-0">--}}
            {{--                                    <div class="input-group mb-3">--}}
            {{--                                        <input class="form-control p-3 p-lg-2" type="text" placeholder="جستجوی پزشک"--}}
            {{--                                               aria-label="Recipient's username" aria-describedby="button-addon3"/>--}}
            {{--                                        <button class="btn btn-outline-light p-3 p-lg-2 px-lg-3" id="button-addon3"--}}
            {{--                                                type="submit"><i class="fas fa-search-location"></i></button>--}}
            {{--                                    </div>--}}
            {{--                                </form>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div--}}
            {{--                            class="left col-12 col-lg-4 d-flex flex-column justify-content-center mt-5 order-0 order-lg-1">--}}
            {{--                            <img src="{{ asset('theme/images/1.png') }}" alt=""/></div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
                <path fill="#fff"
                ="" d="
                M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z
                "></path>
            </svg>
        </section>
        <section class="py-5 sec-2" id="categouries">
            <div class="container">
                <div class="title-sec d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-around align-items-center">
                        <div class="header d-flex flex-column align-items-center">
                            <div class="head-title text-center my-5">
                                <h2 class="text-center">دسته بندی پزشکان</h2><span class="line mb-5"> </span>
                            </div>
                            <P class="text-center">
                                میتوانید بهترین پزشک ها را ببینید
                            </P>
                        </div>
                    </div>
                </div>
                <!-- owl carousel-->
                <div class="owl-carousel owl-theme">
                    @foreach($expertises as $expertise)
                        <div class="item"><a
                                class="item-content d-flex flex-column justify-content-center align-items-center"
                                href="{{ route('doctors') }}?category={{ $expertise->name }}">
                                <div class="cat d-flex flex-column justify-content-center align-items-center">
                                    @if($expertise->icon!==null)
                                        {!! $expertise->icon !!}
                                    @else
                                        <img src="{{ asset('uploads/'.$expertise->image) }}" alt=""
                                             style="width: 100px">
                                    @endif
                                    <h3>
                                        {{ $expertise->label }}
                                    </h3>
                                </div>
                            </a></div>
                    @endforeach

                </div>
                <!-- !owl carousel-->
            </div>
        </section>
        <section class="py-5 sec-3" id="doctors">
            <div class="container">
                <div class="title-sec d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-around align-items-center">
                        <div class="header d-flex flex-column align-items-center">
                            <div class="head-title text-center my-5">
                                <h2 class="text-center">جزییات پزشکان</h2><span class="line mb-5"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 button-group px-3 d-flex justify-content-start">
                        <a class="see-more align-self-end btn" href="{{ route('doctors') }}">مشاهده بیشتر </a>
                    </div>
                </div>
                <!-- owl carousel-->
                <div class="owl-carousel owl-theme">
                    @foreach($doctors as $doctor)
                        @if($doctor->profile==1 && $doctor->status==1)
                            <div class="item">
                                <div class="card"><a class="overflow-hidden"
                                                     href="{{ route('showDoctor',$doctor->id) }}"><img
                                            class="card-img-top"
                                            src="{{ asset('uploads/'.$doctor->image) }}"
                                            alt="..."/></a>
                                    <div class="card-body">
                                        <div class="d-flex align-items-baseline justify-content-between">
                                            <h3 class="card-title">{{ $doctor->name }}  {{ $doctor->lastname }}</h3>
                                            <span
                                                class="badge bg-info text-light rounded-pill p-2">
                                                {{ $doctor->expertise->name }}
                                            </span>
                                        </div>
                                        <ul class="row social-media justify-content-start px-0 py-2 my-1">
                                            <li class="col-1 mx-1 animate__animated"><a
                                                    href="https://www.instagram.com/{{$doctor->instagram}}"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li class="col-1 mx-1 animate__animated"><a
                                                    href="https://t.me/{{ $doctor->telegram }}"><i
                                                        class="fab fa-telegram"></i></a>
                                            </li>
                                            <li class="col-1 mx-1 animate__animated"><a
                                                    href="mailto: {{ $doctor->email }}"><i
                                                        class="fas fa-envelope"></i></a>
                                            </li>
                                            <li class="col-1 mx-1 animate__animated"><a
                                                    href="https://www.facebook.com/{{ $doctor->facebook }}"><i
                                                        class="fab fa-facebook"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body d-flex justify-content-start pt-0"><a
                                            class="card-link reserve-btn btn bg-pr-1 text-light"
                                            href="{{ route('showDoctor',$doctor->id) }}">رزو نوبت</a><a
                                            class="card-link interduce-btn btn bg-pr-4 text-light"
                                            href="{{ route('showDoctor',$doctor->id) }}">معرفی</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
                <!-- !owl-carousel-->
            </div>
        </section>
        <section class="sec-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 right-sight">
                        <div class="py-3 p-1 p-md-5">
                            <h3>ما بهترین پزشکان و متخصصین بهداشت را در سراسر دنیا داریم </h3>
                            <p class="service-description">ورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم
                                ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را
                                در بر
                                می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار
                                چاپ و
                                متن را در بر می گیرد.40 سال استاندارد صنعت بوده است.</p>
                            <ul class="p-0">
                                <li><i class="fas fa-badge-check text-light m-2"> </i><span>یک محیط خوب برای کار.</span>
                                </li>
                                <li><i class="fas fa-badge-check text-light m-2"> </i><span>آزمایشگاه دیجیتال.</span>
                                </li>
                                <li><i class="fas fa-badge-check text-light m-2"> </i><span>خدمات اضطراری.</span></li>
                                <li><i class="fas fa-badge-check text-light m-2"> </i><span>پزشکان با تجربه.</span></li>
                                <li>
                                    <i class="fas fa-badge-check text-light m-2"> </i><span>مهارت های علمی برای نتیجه بهتر.</span>
                                </li>
                            </ul>
                            <a class="btn" href="#">اطلاعات بیشتر </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 left-sight bg-white p-0 d-none d-lg-inline-block"><img
                            src="{{ asset('theme/images/services/serv.jpg') }}" alt=""/></div>
                </div>
            </div>
        </section>
        <section class="sec-6 py-5">
            <div class="header d-flex flex-column align-items-center">
                <div class="head-title text-center my-5">
                    <h2 class="text-center">سوالات متدول</h2><span class="line mb-5"> </span>
                </div>
                <P class="text-center">
                    سوالات متداول شما کاربران عزیز
                </P>
            </div>
            {{--            <div class="container">--}}
            {{--                <div class="row mt-5 mb-4 g-3 text-start">--}}
            {{--                    <div class="col-md-12 button-group d-flex justify-content-end">--}}
            {{--                        <a class="see-more align-self-end btn" href="#">مشاهده--}}
            {{--                            بیشتر</a></div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="container accordion" id="accordionExample">
                <div class="accordion-item d-none">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion
                            Item #1
                        </button>
                    </h2>
                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body"><strong>This is the first item's accordion body.</strong> It is
                            shown by default, until the collapse plugin adds the appropriate classes that we use to
                            style each element. These classes control the overall appearance, as well as the showing and
                            hiding via CSS transitions. You can modify any of this with custom CSS or overriding our
                            default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>,
                            though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                @foreach($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="collapseTwo">{{ $faq->title }}</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapse{{ $faq->id }}"
                             aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $faq->body !!}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </section>
        <section class="sec-7 my-5 py-5">
            <div class="header d-flex flex-column align-items-center">
                <div class="head-title text-center my-5">
                    <h2 class="text-center">مقالات</h2><span class="line mb-5"> </span>
                </div>
                <P class="text-center">
                    آخرین مقالات علمی را در سایت ما جستجو کنید
                </P>
            </div>
            <div class="container">
                <div class="row mt-5 mb-4 g-3 text-start">
                    <div class="col-md-12 button-group d-flex justify-content-end">
                        <a class="see-more align-self-end btn" href="{{ route('blog') }}">مشاهده بیشتر</a>
                    </div>
                </div>
                <div class="row posts">
                    @foreach($posts as $post)
                        @if($post->status==1)
                            <div class="col-12 col-md-4 mb-3">
                                <div class="card article">
                                    <div class="card-img"><img class="w-100 h-100"
                                                               src="{{ asset('uploads/'.$post->image) }}"
                                                               alt=""/><i
                                            class="fas fa-book article-icon"></i></div>
                                    <div class="card-container">
                                        <div class="card-body">
                                            <h3 class="card-title">
                                                {{ $post->title }}
                                            </h3>
                                            <p class="card-text" style="line-height: 20px">
                                                {!! \Illuminate\Support\Str::limit($post->body, 150, $end='...') !!}
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div
                                                class="badge bg-info text-dark">                                           <span>
                        <time data-time="2021-01-05 18:00"></time><i class="fas fa-clock text-light"> </i><span
                                                        class="mx-1 text-light">2021 01 05 </span></span></div>
                                        </div>
                                    </div>
                                    <div class="card-img-overlay d-flex flex-column justify-content-center text-center">
                                        <a
                                            class="card-title text-center" href="{{ route('singlePost',$post->id) }}">مشاهده
                                            مقاله <i
                                                class="fas fa-external-link"></i></a></div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
    </main>
    @include('theme.layouts.footer')
@endsection



