<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">


        @php
            $user_id = \Illuminate\Support\Facades\Auth::user()->id;
             $doctor = \App\Models\Doctor::where('user_id',$user_id)->first();
        @endphp
        @if(\Illuminate\Support\Facades\Auth::user()->is_active==1 )
            @if($doctor->profile==1 && $doctor->status==1)

                <section class="sidebar-wrapper">

                    <a href="{{ route('doctor.home') }}" class="sidebar-link">
                        <i class="fas fa-home"></i>
                        <span>خانه</span>
                    </a>

                    <section class="sidebar-part-title">پروفایل</section>
                    <a href="{{ route('doctor.profile.show',$doctor->id) }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>مدیریت پروفایل</span>
                    </a>
                    <a href="{{ route('doctor.days.index') }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>مدیریت زمان ها</span>
                    </a>
                    <a href="{{ route('doctor.videos.index') }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>آپلود فیلم</span>
                    </a>
                    <a href="{{ route('doctor.files.index') }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>آپلود فایل</span>
                    </a>

                    {{--            <section class="sidebar-group-link">--}}
                    {{--                <section class="sidebar-dropdown-toggle">--}}
                    {{--                    <i class="fas fa-chart-bar icon"></i>--}}
                    {{--                    <span>مدیریت کاربران</span>--}}
                    {{--                    <i class="fas fa-angle-left angle"></i>--}}
                    {{--                </section>--}}
                    {{--                <section class="sidebar-dropdown">--}}
                    {{--                    <a href="{{ route('admin.patients.index') }}">بیماران</a>--}}
                    {{--                    <a href="{{ route('admin.doctors.index') }}">پزشکان</a>--}}
                    {{--                </section>--}}
                    {{--            </section>--}}
                    {{--            <section class="sidebar-part-title">بخش فروش</section>--}}

                    {{--                        <section class="sidebar-group-link">--}}
                    {{--                            <section class="sidebar-dropdown-toggle">--}}
                    {{--                                <i class="fas fa-chart-bar icon"></i>--}}
                    {{--                                <span>ویترین</span>--}}
                    {{--                                <i class="fas fa-angle-left angle"></i>--}}
                    {{--                            </section>--}}
                    {{--                            <section class="sidebar-dropdown">--}}
                    {{--                                <a href="#">دسته بندی</a>--}}
                    {{--                                <a href="#">فرم کالا</a>--}}
                    {{--                                <a href="#">برندها</a>--}}
                    {{--                                <a href="#">کالاها</a>--}}
                    {{--                                <a href="#">انبار</a>--}}
                    {{--                                <a href="#">نظرات</a>--}}
                    {{--                            </section>--}}
                    {{--                        </section>--}}

                    {{--            <section class="sidebar-group-link">--}}
                    {{--                <section class="sidebar-dropdown-toggle">--}}
                    {{--                    <i class="fas fa-chart-bar icon"></i>--}}
                    {{--                    <span>سفارشات</span>--}}
                    {{--                    <i class="fas fa-angle-left angle"></i>--}}
                    {{--                </section>--}}
                    {{--                <section class="sidebar-dropdown">--}}
                    {{--                    <a href="#"> جدید</a>--}}
                    {{--                    <a href="#">در حال ارسال</a>--}}
                    {{--                    <a href="#">پرداخت نشده</a>--}}
                    {{--                    <a href="#">باطل شده</a>--}}
                    {{--                    <a href="#">مرجوعی</a>--}}
                    {{--                    <a href="#">تمام سفارشات</a>--}}
                    {{--                </section>--}}
                    {{--            </section>--}}

                    {{--            <section class="sidebar-group-link">--}}
                    {{--                <section class="sidebar-dropdown-toggle">--}}
                    {{--                    <i class="fas fa-chart-bar icon"></i>--}}
                    {{--                    <span>پرداخت ها</span>--}}
                    {{--                    <i class="fas fa-angle-left angle"></i>--}}
                    {{--                </section>--}}
                    {{--                <section class="sidebar-dropdown">--}}
                    {{--                    <a href="#">تمام پرداخت ها</a>--}}
                    {{--                    <a href="#">پرداخت های آنلاین</a>--}}
                    {{--                    <a href="#">پرداخت های آفلاین</a>--}}
                    {{--                    <a href="#">پرداخت در محل</a>--}}
                    {{--                </section>--}}
                    {{--            </section>--}}

                    {{--            <section class="sidebar-group-link">--}}
                    {{--                <section class="sidebar-dropdown-toggle">--}}
                    {{--                    <i class="fas fa-chart-bar icon"></i>--}}
                    {{--                    <span>تخفیف ها</span>--}}
                    {{--                    <i class="fas fa-angle-left angle"></i>--}}
                    {{--                </section>--}}
                    {{--                <section class="sidebar-dropdown">--}}
                    {{--                    <a href="#">کپن تخفیف</a>--}}
                    {{--                    <a href="#">تخفیف عمومی</a>--}}
                    {{--                    <a href="#">فروش شگفت انگیز</a>--}}
                    {{--                </section>--}}
                    {{--            </section>--}}

                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>روش های ارسال</span>--}}
                    {{--            </a>--}}


                    <section class="sidebar-part-title">مدیریت</section>
                    <a href="{{ route('doctor.posts.index') }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>پست ها</span>
                    </a>
                    <a href="{{ route('doctor.reserves.index') }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>رزرو ها</span>
                    </a>


                    {{--            <section class="sidebar-part-title">بخش کاربران</section>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>کاربران ادمین</span>--}}
                    {{--            </a>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>مشتریان</span>--}}
                    {{--            </a>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>سطوح دسترسی</span>--}}
                    {{--            </a>--}}


                    {{--            <section class="sidebar-part-title">تیکت ها</section>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>تیکت های جدید</span>--}}
                    {{--            </a>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>تیکت های باز</span>--}}
                    {{--            </a>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>تیکت های بسته</span>--}}
                    {{--            </a>--}}


                    {{--            <section class="sidebar-part-title">اطلاع رسانی</section>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>اعلامیه ایمیلی</span>--}}
                    {{--            </a>--}}
                    {{--            <a href="#" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>اعلامیه پیامکی</span>--}}
                    {{--            </a>--}}


                    {{--            <section class="sidebar-part-title">سایر</section>--}}
                    {{--            <a href="{{ route('admin.expertises.index') }}" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>مدیریت تخصص ها</span>--}}
                    {{--            </a>--}}
                    {{--            <a href="{{ route('admin.reserves.index') }}" class="sidebar-link">--}}
                    {{--                <i class="fas fa-bars"></i>--}}
                    {{--                <span>مدیریت رزرو ها</span>--}}
                    {{--            </a>--}}


                </section>
            @else
                <a href="{{route('doctor.profile.edit',$doctor->id)}}" class="alert alert-danger"
                   style="font-size: 10px;text-decoration: none">بعد از تکمیل پروفایل منتظر تایید ادمین باشید </a>
                <a href="{{  route('home') }}" class="btn btn-warning mt-5">خانه</a>
            @endif
        @else
            <p class="alert alert-danger">پنل تایید نشده است </p>
        @endif
    </section>
</aside>
