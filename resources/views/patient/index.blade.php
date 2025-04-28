@extends('patient.layouts.master')

@section('head-tag')
    <title>داشبورد بیمار</title>
@endsection

@section('content')

    <section class="row">

        @php

            $user_id = \Illuminate\Support\Facades\Auth::user()->id;


        @endphp

        @if(auth()->user()->is_active==1)
            <section class="col-lg-3 col-md-6 col-12">
                <a href="" class="text-decoration-none d-block mb-4">
                    <section class="card bg-success text-white">
                        <section class="card-body">
                            <section class="d-flex justify-content-between">
                                <section class="info-box-body">
                                    <h5>
                                        @php
                                            $patient = \App\Models\Patient::query()->where('user_id',auth()->user()->id)->first();
                                        $reserve = \App\Models\Reserve::query()->where('patient_id',$patient->id)->count();
echo $reserve

                                        @endphp
                                    </h5>
                                    <p>رزروها</p>
                                </section>
                                <section class="info-box-icon">
                                    <i class="fas fa-chart-line"></i>
                                </section>
                            </section>
                        </section>
                        <section class="card-footer info-box-footer">
                            <i class="fas fa-clock mx-2"></i> تعداد رزروها
                        </section>
                    </section>
                </a>
            </section>

        @else
            <div class="alert alert-danger mr-3">
                <h4>
                    بعد از تایید پنل میتوانید رزرهای خود را ببنید
                </h4>
            </div>
        @endif

    </section>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        بخش بیمار
                    </h5>
                    <p>
                        {{ $setting->patirnt_text }}
                    </p>
                </section>
                <section class="body-content">
                    <p>

                    </p>

                </section>
            </section>
        </section>
    </section>

@endsection

