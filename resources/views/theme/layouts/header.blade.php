<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container"><a class="navbar-brand" href="./"> <img src="{{ asset('uploads/'.$setting->logo) }}"
                                                                       alt=""/></a>
            <button class="menu-btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-ellipsis-h"></i></button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('home') }}" role="button" data-bs-toggle="dropdown"
                                                     aria-expanded="false">
                            خانه
{{--                            <i--}}
{{--                                class="fas fa-angle-down mx-2"></i>--}}
                        </a>
                       {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
--}}{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}{{--
--}}{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}{{--
--}}{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}{{--
                        </ul>--}}
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('blog') }}" role="button" data-bs-toggle="dropdown"
                                                     aria-expanded="false">

                            وبلاگ
{{--                            <i--}}
{{--                                class="fas fa-angle-down mx-2"></i>--}}
                        </a>
                       {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
--}}{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}{{--
--}}{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}{{--
--}}{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}{{--
                        </ul>--}}
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('doctors') }}" role="button" data-bs-toggle="dropdown"
                                                     aria-expanded="false">
                            پزشکان
{{--                            <i--}}
{{--                                class="fas fa-angle-down mx-2"></i>--}}
                        </a>
{{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{ route('register') }}" role="button" data-bs-toggle="dropdown"
                                                     aria-expanded="false">
                            <i class="fa fa-chevrons-down"></i>
                            ثبت نام
{{--                            <i--}}
{{--                                class="fas fa-angle-down mx-2"></i>--}}
                        </a>
                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
--}}{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}{{--
--}}{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}{{--
--}}{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}{{--
                        </ul>--}}
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0 mr-0 ml-3 d-flex justify-content-end">
                    <div class="d-flex justify-content-end align-items-center"><a class="profile p-0" target="_blank" href="
                    @if(!auth()->check())
                    /login
                    @elseif(auth()->user()->role=="doctor")
                    /doctor
                    @elseif(auth()->user()->role=="patient")
                    /patient
                    @elseif(auth()->user()->role=="admin")
                    /admin
                    @endif
                    ">
                            @auth()
                               <img
                                    src="{{ asset('av.png') }}" alt=""/></a><span class="text-white" style="margin-right: 15px">پروفایل کاربری</span>
                        {{--<button class="btn-sm bg-transparent border-0 login-nav-btn d-flex align-items-center"
                                type="submit"><span class="logOut-short-btn d-flex align-items-center text-danger"><i
                                    class="fas fa-sign-out-alt"></i><small>خروج</small></span><span
                                class="logIn-short-btn d-flex align-items-center"><i
                                    class="fas fa-sign-in-alt"></i><small>ورود</small></span></button>--}}
                        @else
                            <a href="{{ route('login') }}" class=" ml-3"
                               style="margin-right: 15px">
                                <span class="logIn-short-btn d-flex align-items-center">
                                    <i class="fas fa-sign-in-alt text-white fs-2"></i>
                                    <small class="text-white fs-6 mx-1" >ورود</small></span>
                            </a>
                        @endauth
                    </div>
                </form>

            </div>
        </div>
    </nav>
</header>
