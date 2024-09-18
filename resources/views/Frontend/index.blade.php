@extends('Frontend.layouts.master')
@section('title')
    الصفحة الرئيسية
@endsection

@section('style')
<style>
    .Services_is {
        transition: transform 0.2s; /* Smooth transition */
        round-clip: 40px;
        color: #193933 !important;

    }
    .Services_is:hover  {
        background-color: #193933;
        color: #fff !important;
        transition: background-color .3s ease-in;
        border-radius: 8px;
        cursor: pointer;
    }
    .styled-icon-6x {
        height: 90px;
        width: 90px;
    }


</style>
@endsection
@section('header')
    <div class="header-content my-auto py-5  is-dark">
        <div class="container">
            <div class="row flex-row-reverse align-items-center justify-content-between g-gs">

                <div class="col-lg-12">
                    <div class="header-caption">
                        <h1 class="header-title" style="font-size:40pt;">مؤسسة قمّة المَلقا</h1>
                        <div class="header-text pe-5">
                            <p style="font-size: 18pt; color:#fff; ">الأولى في المملكة في خدمات الأعمال  يهدف عملنا إلى ابتكار الأفكار واستقطاب الكوادر التي تمثّل أعلى معايير التّميّز في تقديم خدمةٍ مهنيّةٍ احترافيّةٍ بأعلى جودةٍ ممكنةٍ وتمكين كلّ من يساهم بذلك من النّموّ المستمرّ.</p>
                        </div>
                        <ul class="header-action btns-inline">
                            <li>
                                <a href="#" class="btn btn-secondary btn-round btn-lg"><span>اعرف اكثر</span></a>
                            </li>
                        </ul><!-- .header-action -->
                    </div><!-- .header-caption -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .header-content -->


@endsection
@section('content')
    <section class="section section-service py-0 d-none d-md-block " id="service">
        <div class="container">
            <div class="section-content">
                <div class="row justify-content-start text-start g-gs">
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-shadow" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-white">
                                        <img src="{{asset('Frontend/img/t4.svg')}}">
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <h4 class="title text-white">المشورة في مجال الأعمال</h4>
                                        {{--                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusm lod tempor incididunt.</p>--}}
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-shadow p-3" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-white">
                                        <img src="{{asset('Frontend/img/t2.svg')}}">
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <h4 class="title text-white">التّدريب والتّأهيل</h4>
                                        {{--                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusm lod tempor incididunt.</p>--}}
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-shadow p-3" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-white">
                                        <img src="{{asset('Frontend/img/t3.svg')}}">
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <h4 class="title text-white">الحلول والخطط</h4>
                                        {{--                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusm lod tempor incididunt.</p>--}}
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-4 col-lg-3">
                        <div class="card card-shadow p-3" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-white">
                                        <img src="{{asset('Frontend/img/t4.svg')}}">
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <h4 class="title text-white">التّطوير والتّميّز
                                        </h4>
                                        {{--                                            <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit, sed do eiusm lod tempor incididunt.</p>--}}
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .section-content -->
        </div><!-- .container -->
    </section><!-- .section -->

    <section class="section section-service pb-5" id="feature">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-md-8">
                    <div class="section-head">
                        <h2 class="title text-dark">ماذا نقدّم لكم؟</h2>
                        <p>Continually network virtual strategic theme areas vis-a-vis ubiquitous potentialities. Holisticly negotiate focused e-tailers without premium solutions.</p>
                    </div><!-- .section-head -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="section-content">
                <div class="row gy-gs justify-content-center text-center">
                    <div class="col-mb-4 col-lg-4">
                        <div class="card card-full service service-s4 bg-lighter after-bg-secondary">
                            <a href="#">
                            <div class="card-inner">
                                <div class="service-icon styled-icon styled-icon-6x text-info">
                                <img   src="{{asset('Frontend/img/casestudy.png')}}" >
                                </div>
                                <div class="service-text">
                                    <h4 class="title" style="color: #1F826F;">دراسة الجدوى</h4>
                                    <span class="fw-bold fs-16px text-secondary">دراسة نجاح أو خسارة المشروع ودراسة الجوانب الإدارية
                                        (قانونية- اقتصادية- تسويقية- فنية- مالية) المتعلقة بالمشروع.</span>
                                </div>
                            </div>
                            </a>
                        </div><!-- .service -->
                    </div><!-- .col -->
                    <div class="col-mb-4 col-lg-4">
                        <div class="card card-full service service-s4 bg-lighter after-bg-secondary">
                            <a href="#">
                            <div class="card-inner">
                                <div class="service-icon styled-icon styled-icon-6x text-info">
                                <img  src="{{asset('Frontend/img/realstat.png')}}" >
                                </div>
                                <div class="service-text">
                                    <h4 class="title" style="color: #1F826F;">الوساطة العقارية</h4>
                                    <span class="fw-bold fs-16px text-secondary">نعمل على إتمام الصفقات العقارية بين الأطراف بأعلى معايير الجودة.</span>
                                </div>
                            </div>
                            </a>
                        </div><!-- .service -->
                    </div><!-- .col -->
                    <div class="col-mb-4 col-lg-4">
                        <div class="card card-full service service-s4 bg-lighter after-bg-secondary">
                            <a href="#">
                            <div class="card-inner">
                                <div class="service-icon styled-icon styled-icon-6x text-info">
                                <img  src="{{asset('Frontend/img/consultanting.png')}}" >
                                </div>
                                <div class="service-text">
                                    <h4 class="title" style="color: #1F826F;">الاستشارات</h4>
                                    <span class="fw-bold fs-16px text-secondary">نقدم أفضل الاستشارات التي تساهم بتحسين الأداء بهدف الوصول إلى قمة النجاحات..</span>
                                </div>
                            </div>
                            </a>
                        </div><!-- .service -->
                    </div><!-- .col -->
                    <div class="col-mb-4 col-lg-4">
                        <div class="card card-full service service-s4 bg-lighter after-bg-secondary">
                            <a href="#">
                            <div class="card-inner">
                                <div class="service-icon styled-icon styled-icon-6x text-info">
                                <img  src="{{asset('Frontend/img/school.png')}}" >
                                </div>
                                <div class="service-text">
                                    <h4 class="title" style="color: #1F826F;">خدمات جامعية</h4>
                                    <span class="fw-bold fs-16px text-secondary">نخدم طلاب الجامعات والأساتذة الطامحين إلى فكر متجدد بمساعدتهم في إعداد البحوث والخطط البحثية والنشر الدولي في مجلات محكمة (isi- scopus وفق معايير الجودة العالمية في التعليم..</span>
                                </div>
                            </div>
                            </a>
                        </div><!-- .service -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </section>
@endsection

@section('script')

{{--    <script>--}}
{{--        const img = document.getElementById('hoverImage');--}}
{{--        const card = document.getElementById('Services_is');--}}

{{--        card.addEventListener('mouseenter', function() {--}}
{{--            img.src = '{{asset('Frontend/img/investment_hover.svg')}}'; // Change to hover image--}}
{{--        });--}}

{{--        card.addEventListener('mouseleave', function() {--}}
{{--            img.src = '{{asset('Frontend/img/investment.svg')}}'; // Change back to original image--}}
{{--        });--}}
{{--    </script>--}}

@endsection


