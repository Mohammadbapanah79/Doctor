<aside id="sidebar" class="sidebar">
    <section class="sidebar-container">
        @php

            $user_id = \Illuminate\Support\Facades\Auth::user()->id;
             $patient = \App\Models\Patient::where('user_id',$user_id)->first();

        @endphp
        @if(\Illuminate\Support\Facades\Auth::user()->is_active==1 )

            @if($patient->profile==1)


                <section class="sidebar-wrapper">
                    <section class="sidebar-part-title">بخش بیمار</section>
                    <a href="{{route('patient.profile.edit',$patient->id)}}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>مشخصات فردی</span>
                    </a>

                    <a href="{{route('home')}}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>برگرد به سایت</span>
                    </a>

                    <a href="{{ route('patient.reserves.index') }}" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>رزرو های من</span>
                    </a>

                </section>

            @else

                <a href="{{route('patient.profile.edit',$patient->id)}}" class="alert alert-danger" style="font-size: 15px">ابتدا پروفایلتان را تکمیل نمایید </a>
            @endif


        @else

            <p class="alert alert-danger">پنل تایید نشده است </p>
        @endif
    </section>
</aside>
