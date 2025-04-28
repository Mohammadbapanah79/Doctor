@extends('theme.layouts.master')
@section('head-tag')
    <title>صفحه اصلی</title>
@endsection
@section('main')
    <main>
        <div class="sec-doctor-1 py-5">
            <div class="container">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="image-doctor"><img class="img-fluid rounded-start h-100"
                                                           src="{{ asset('uploads/'.$doctor->image) }}" alt="..."/>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex justify-content-center flex-column">
                            <div class="card-body d-flex justify-content-center flex-column">
                                <h3 class="card-title">{{ $doctor->name }}  {{ $doctor->lastname }}</h3><span class="my-2"> <span
                                        class="p-2 d-inline-block badge bg-info skill">
                                        {{ $doctor->expertise->name }}
                                    </span></span>
                                <p class="card-text">
                                    {{ $doctor->short_description }}
                                </p>
                                <div class="social-media text-center">
                                    <div class="icons">
                                        <div class="d-flex justify-content-start w-100"><a class="animate__animated"
                                                                                           href="https://www.facebook.com/{{ $doctor->facebook }}"><i
                                                    class="fab fa-facebook"></i></a><a class="animate__animated"
                                                                                       href="mailto: {{ $doctor->email }}"><i
                                                    class="fas fa-envelope"></i></a><a class="animate__animated"
                                                                                       href="https://t.me/{{ $doctor->telegram }}"><i
                                                    class="fab fa-telegram"></i></a><a class="animate__animated"
                                                                                       href="https://www.instagram.com/{{$doctor->instagram}}"><i
                                                    class="fab fa-instagram"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-doctor">
                    <ul class="nav nav-pills mb-1 d-flex justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn active" id="pills-biography-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-biography" type="button" role="tab"
                                    aria-controls="pills-biography" aria-selected="true"><i
                                    class="fas fa-history mx-1"></i> سوابق پزشک
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn" id="pills-reserve-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-reserve" type="button" role="tab"
                                    aria-controls="pills-reserve" aria-selected="false"><i
                                    class="fas fa-ticket mx-1"> </i> رزرو نوبت
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn" id="pills-comments-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-comments" type="button" role="tab"
                                    aria-controls="pills-comments" aria-selected="false"><i
                                    class="fas fa-comments mx-1"></i> نظرات
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active p-3" id="pills-biography" role="tabpanel"
                             aria-labelledby="pills-biography-tab">
                            <h3>some title</h3>
                            <p>
                                {{ $doctor->description }}
                            </p>
                        </div>
                        <div class="tab-pane fade p-3" id="pills-reserve" role="tabpanel"
                             aria-labelledby="pills-reserve-tab">
                            <div class="resevsion">
                                <div class="header d-flex flex-column align-items-center">
                                    <div class="head-title text-center my-5">
                                        <h2 class="text-center my-1">رزو نوبت</h2><span class="line my-1"></span>
                                        <p class="my-1">شما میتوانید نوبت خود را از همین الان رزو کنید</p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        @if(auth()->check() && auth()->user()->role=="patient" && auth()->user()->is_active==1)
                                            <div class="col-12 col-lg-6 left-sight pt-lg-5 pb-0 order-lg-0 order-1">
                                                <div class="row p-md-5 pb-0">

                                                    <form action="{{ route('reserve') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                                                        <div class="col-12 mb-3">
                                                            <input class="form-control form-control-lg" id="time"
                                                                   type="time" name="time"
                                                            />
                                                            @error('time')
                                                            <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <input class="form-control form-control-lg" id="date"
                                                                   type="date" name="date"
                                                            />
                                                            @error('date')
                                                            <span class="text-danger">
                                                            {{ $message }}
                                                        </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12 p-0 px-3 mb-3">
                                                            <button class="btn w-100"> Submit <i
                                                                    class="lab la-telegram-plane" type="submit"> </i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                            <div class="col-12 col-lg-6 right-sight pt-5 order-lg-1 order-0">
                                                <div class="p-5">
                                                    <h4>ثبت رزرو </h4>
                                                    <p>
                                                        میتوانید به راحتی از پزشک مورد نظر خود وقت رزرو کنید

                                                    </p>
                                                    <h4>
                                                        زمان های ویزیت دکتر {{ $doctor->name }} {{ $doctor->lastname }} :
                                                    </h4>
                                                    <div class="col-12 col-lg-6">
                                                        <ul class="p-0">
                                                            @foreach($days as $day)
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                       <span style="font-weight: bold">شنبه :</span>   <span style="font-weight: bold">{{ $day->saturday }}</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                      <span style="font-weight: bold">یکشنبه :</span>      <span style="font-weight: bold"> {{ $day->sunday }}</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                         <span style="font-weight: bold">دوشنبه :</span>    <span style="font-weight: bold">{{ $day->monday }}</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                     <span style="font-weight: bold">سه شنبه :</span>     <span style="font-weight: bold">{{ $day->tuesday }}</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                      <span style="font-weight: bold">چهارشنبه :</span>     <span style="font-weight: bold">  {{ $day->wednesday }}</span>

                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                        <span style="font-weight: bold">پنجشنبه :</span>    <span style="font-weight: bold"> {{ $day->thursday }}</span>
                                                                    </span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-badge-check text-light m-2"> </i><span>
                                                                    <span style="font-weight: bold">جمعه :</span>        <span style="font-weight: bold"> {{ $day->friday }}</span>
                                                                    </span>
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="alert alert-danger">
                                                {{ "برای ثبت رزرو باید ابتدا به عنوان بیمار ثبت نام کنید و پروفایل خود را تکمیل نمایید" }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade comments p-3" id="pills-comments" role="tabpanel"
                             aria-labelledby="pills-comments-tab">
                            @if(auth()->check())
                                <form class="send-comment p-3" action="{{ route('doctorComments.store') }}"
                                      method="post">
                                    @csrf
                                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlTextarea1">comment</label>
                                        <textarea placeholder="نظر خود را بنویسید" class="form-control"
                                                  id="exampleFormControlTextarea1" rows="3"
                                                  name="body"></textarea>
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
                                    {{ "برای ثبت نظر باید وارد شوید" }}
                                </div>
                            @endif
                            @foreach($doctorComments as $doctorComment)
                                @if($doctorComment->status==1)
                                    <div class="mb-5 d-flex flex-column justify-content-around align-items-start">
                                        <div class="comment w-100 border-top mt-5 pt-5">
                                            <div class="author">
                                                <div class="author-image"><img
                                                        src="{{ asset('theme/images/avatar.png') }}"
                                                        alt=""/></div>
                                                <div class="title my-2">
                                                    {{ auth()->user()->email }}
                                                </div>
                                            </div>
                                            <time data-time="2021-10-03">{{ auth()->user()->email }}</time>
                                            <p class="comment-content">
                                                {{ $doctorComment->body }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('theme.layouts.footer')
@endsection

