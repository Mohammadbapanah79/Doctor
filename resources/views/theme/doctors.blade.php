@extends('theme.layouts.master')
@section('head-tag')
    <title>صفحه اصلی</title>
@endsection

@section('main')
    <main>
        <section class="pb-5" id="search-doctor">
            <div class="container header">
                <h2 class="text-center">لیست پزشکان موجود</h2><span class="line mb-5"> </span>
                <P class="text-center">با اعمال فیلتر پزشک مورد نظر خود را پیدا کنید</P>
            </div>
            <div class="container pb-5">
                <div class="row mt-5 mb-4 g-3">
                    <div class="col-md-12 button-group filter-button-group gender">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio-3" type="radio" name="gender" value=".all" checked="true"/>
                            <label class="form-check-label" for="inlineRadio-3">هردو</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio-1" type="radio" name="gender" value=".male"/>
                            <label class="form-check-label" for="inlineRadio-1">مرد</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio-2" type="radio" name="gender" value=".female"/>
                            <label class="form-check-label" for="inlineRadio-2">زن</label>
                        </div>
                    </div>
                    <div class="col-md-12 button-group filter-button-group categories">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineRadio-4" type="radio" name="category" value=".all"/>
                            <label class="form-check-label" for="inlineRadio-4">همه</label>
                        </div>
                        @foreach($expertises as $expertise)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="inlineRadio-4" type="radio" name="category" value=".{{ $expertise->name }}"/>
                                <label class="form-check-label" for="inlineRadio-4">
                                    {{ $expertise->label }}
                                </label>
                            </div>
                        @endforeach


{{--                        <button class="btn btn-outline-primary-1-hover filter">اعمال</button>--}}
                    </div>
                </div>
                <div class="row gallery grid">
                    @foreach($doctors as $doctor)
                        <div class="col-12 col-lg-3 mb-3 element-item all {{ $doctor->expertise->name }} {{ $doctor->gender->name }}"><a class="card" href="{{ route('showDoctor',$doctor->id) }}">
                                <div class="row g-0">
                                    <div class="col-4"><img class="w-100 h-100 rounded-start" src="{{ asset('uploads/'.$doctor->image) }}" alt="..."/></div>
                                    <div class="col-8">
                                        <div class="card-body">
                                            <div class="card-title"> <span>دکتر</span>
                                                <h5>{{ $doctor->name }}  {{ $doctor->lastname }}</h5>
                                            </div>
                                            <div class="card-text skill"><span class="badge bg-info">{{ $doctor->expertise->name }} </span></div>
                                            <p class="card-text my-2"><small class="text-muted d-flex align-items-center"> <i class="fas fa-map-marker-alt"></i><span class="city mx-2"> {{ $doctor->city }}</span></small></p>
                                        </div>
                                    </div>
                                </div></a></div>
                    @endforeach

                </div>
            </div>
        </section>
        @include('theme.layouts.footer')
    </main>
@endsection


