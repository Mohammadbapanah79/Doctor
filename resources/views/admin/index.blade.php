@extends('admin.layouts.master')
@section('head-tag')
    <title>داشبورد اصلی</title>
@endsection
@section('content')
    <section class="row">

        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-custom-yellow text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\User::query()->where('is_active',0)->where('role','doctor')->count() }}

                                </h5>
                                <p>
                                    پزشکان تایید نشده
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-custom-green text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\User::query()->where('is_active',0)->where('role','patient')->count() }}

                                </h5>
                                <p>
                                    بیماران تایید نشده
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-custom-pink text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\User::query()->where('is_active',1)->where('role','patient')->count() }}

                                </h5>
                                <p>
                                    بیماران تایید شده
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-custom-blue text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\User::query()->where('is_active',1)->where('role','doctor')->count() }}

                                </h5>
                                <p>
                                    پزشکان تایید شده
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-danger text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\Post::query()->where('status',0)->count() }}

                                </h5>
                                <p>
                                    پست های تایید شده
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-success text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\Post::query()->where('status',1)->count() }}

                                </h5>
                                <p>پست های تایید شده</p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-warning text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\Expertise::all()->count() }}

                                </h5>
                                <p>
                                    تخصص های موجود در سایت
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>
        <section class="col-lg-3 col-md-6 col-12">
            <a href="#" class="text-decoration-none d-block mb-4">
                <section class="card bg-primary text-white">
                    <section class="card-body">
                        <section class="d-flex justify-content-between">
                            <section class="info-box-body">
                                <h5>
                                    {{ $user = \App\Models\File::all()->count() }}

                                </h5>
                                <p>
                                    تعداد مدارک آپلود شده
                                </p>
                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                    </section>
                </section>
            </a>
        </section>

    </section>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        بخش کاربران
                    </h5>
                    <p>
                        در این بخش اطلاعاتی در مورد کاربران به شما داده می شود
                    </p>
                </section>
                <section class="body-content">
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                        و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم
                        افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی
                        ایجاد کرد. در این صورت
                        می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان
                        مورد
                        نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                        استفاده
                        قرار گیرد.
                    </p>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                        و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم
                        افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی
                        ایجاد کرد. در این صورت
                        می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان
                        مورد
                        نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                        استفاده
                        قرار گیرد.
                    </p>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                        و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم
                        افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی
                        ایجاد کرد. در این صورت
                        می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان
                        مورد
                        نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد
                        استفاده
                        قرار گیرد.
                    </p>
                </section>
            </section>
        </section>
    </section>
@endsection
