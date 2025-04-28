<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        <section class="sidebar-wrapper">

            <a href="{{ route('admin.home') }}" class="sidebar-link">
                <i class="fas fa-home"></i>
                <span>خانه</span>
            </a>
            <a href="{{ route('admin.docStatus.index') }}" class="sidebar-link">
                <i class="fas fa-arrow-alt-circle-down"></i>
                <span>پزشکان تایید نشده</span>
            </a>
            <a href="{{ route('admin.patStatus.index') }}" class="sidebar-link">
                <i class="fas fa-arrow-alt-circle-down"></i>
                <span>بیماران تایید نشده</span>
            </a>


            <section class="sidebar-group-link">
                <section class="sidebar-dropdown-toggle">
                    <i class="fas fa-chart-bar icon"></i>
                    <span>مدیریت کاربران</span>
                    <i class="fas fa-angle-left angle"></i>
                </section>
                <section class="sidebar-dropdown">
                    <a href="{{ route('admin.patients.index') }}">بیماران</a>
                    <a href="{{ route('admin.doctors.index') }}">پزشکان</a>
                </section>
            </section>
            {{--            <section class="sidebar-part-title">بخش فروش</section>--}}

            {{--            <section class="sidebar-group-link">--}}
            {{--                <section class="sidebar-dropdown-toggle">--}}
            {{--                    <i class="fas fa-chart-bar icon"></i>--}}
            {{--                    <span>ویترین</span>--}}
            {{--                    <i class="fas fa-angle-left angle"></i>--}}
            {{--                </section>--}}
            {{--                <section class="sidebar-dropdown">--}}
            {{--                    <a href="#">دسته بندی</a>--}}
            {{--                    <a href="#">فرم کالا</a>--}}
            {{--                    <a href="#">برندها</a>--}}
            {{--                    <a href="#">کالاها</a>--}}
            {{--                    <a href="#">انبار</a>--}}
            {{--                    <a href="#">نظرات</a>--}}
            {{--                </section>--}}
            {{--            </section>--}}

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


            <section class="sidebar-part-title">بخش محتوی</section>
            <a href="{{ route('admin.categories.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>دسته بندی</span>
            </a>
            <a href="{{ route('admin.posts.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>پست ها</span>
            </a>
            <a href="{{ route('admin.comments.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>نظرات مقالات</span>
            </a>
            <a href="{{ route('admin.doctorComments.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>نظرات پزشکان</span>
            </a>
{{--            <a href="{{ route('admin.menus.index') }}" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>منو</span>--}}
{{--            </a>--}}
            <a href="{{ route('admin.faqs.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>سوالات متداول</span>
            </a>
{{--            <a href="{{ route('admin.pages.index') }}" class="sidebar-link">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--                <span>پیج ساز</span>--}}
{{--            </a>--}}

            {{--<a href="{{ route('admin.sliders.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>اسلایدر</span>
            </a>--}}
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


            <section class="sidebar-part-title">سایر</section>
            <a href="{{ route('admin.expertises.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>مدیریت تخصص ها</span>
            </a>
            <a href="{{ route('admin.reserves.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>مدیریت رزرو ها</span>
            </a>
            <a href="{{ route('admin.uploads.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>مدارک آپلود شده پزشکان</span>
            </a>
            <section class="sidebar-part-title">تنظیمات</section>
            <a href="{{ route('admin.settings.index') }}" class="sidebar-link">
                <i class="fas fa-bars"></i>
                <span>تنظیمات</span>
            </a>

        </section>
    </section>
</aside>
