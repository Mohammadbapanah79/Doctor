<footer class="pt-4">
    <div class="container">
        <div class="row connection">
            <div class="col-12 col-md-4 my-1">
                <div class="row align-items-center">
                    <div class="col-4 pr-5 text-center mb-4"><i class="w-25 fas fa-phone-volume"></i></div>
                    <div class="col-8 pl-0 text-left"><a class="text-left" href="#">{{ $setting->contacts }}</a>
                        <p class="text-left"> Mon-Fri 9am-6pm</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-1">
                <div class="row">
                    <div class="col-4 pr-5 text-center"><i class="w-25 fas fa-envelope-open"></i></div>
                    <div class="col-8 pl-0 text-left"><a class="text-left" href="#">{{ $setting->email }}</a>
                        <p class="text-left">Online support</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 my-1">
                <div class="row">
                    <div class="col-4 pr-5 text-center"><i class="w-25 fad fa-map"></i></div>
                    <div class="col-8 pl-0 text-left"><a class="text-left" href="#">{{ $setting->address }}</a>
                        <p class="text-left"> NY 10012, US</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row social-media text-center py-3 my-3 mx-0">
        <div class="col-12 col-md-6 icons">
            <div class="d-flex justify-content-center w-100"><a class="animate__animated"
                                                                href="{{ $setting->facebook }}"><i
                        class="fab fa-facebook"></i></a><a class="animate__animated"
                                                           href="mailto : {{ $setting->email }}"><i
                        class="fas fa-envelope"></i></a><a class="animate__animated" href="{{ $setting->instagram }}"><i
                        class="fab fa-instagram"></i></a><a class="animate__animated" href="{{ $setting->telegram }}"><i
                        class="fab fa-telegram"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row menu justify-content-between">
            <div class="col-12 col-sm-6 col-md-4 d-flex flex-column">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('uploads/'.$setting->logo) }}" alt="" class="img-fluid" style="width: 200px">
                </a>
                <hr/>
                <p class="text-white">
                    {{ $setting->footer_description }}
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flex flex-column">
                <h5>تخصص ها</h5>
                <hr/>
                <ul class="p-0">
                    @foreach($expertises as $expertise)
                        <li><a class="text-white" href="{{ route('doctors') }}?category={{ $expertise->name }}">
                                {{ $expertise->name }}
                            </a></li>
                    @endforeach

                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flex flex-column">
                <h5>مقالات ما </h5>
                <hr/>
                <ul class="p-0">
                    @foreach($categories as $category)
                        <li><a class="text-white"
                               href="{{ route('postCategory',$category->id) }}">{{ $category->title }}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center copyright text-white p-5 m-0"> © Copyright 2022 <a
            href=""> {{ $setting->copy_right }}</a>
        <a href="{{ route('home') }}"></a></div>
</footer>
<div class="shadow rounded-circle scroul-top"><i class="fas fa-chevron-up"> </i></div>

