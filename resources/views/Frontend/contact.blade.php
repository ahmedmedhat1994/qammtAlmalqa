@extends('Frontend.layouts.master')
@section('title')
    اتّصل بنا
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
    .accordion-head {
        border-color: #f5f6fa;
        background: #f5f6fa;
        color: slategray;
    }

    .accordion-head:hover {
        background-color: #9B791F; /* Change to your desired hover color */
        color: white; /* Change text color on hover */
    }
    .accordion-head.active {
        background-color: #9B791F; /* Change to your desired hover color */
        color: white; /* Change text color on hover */
    }
    /*.accordion-item .accordion-head.collapsed {*/
    /*    background-color: #f8f9fa; !* Background color for collapsed state *!*/
    /*}*/

    .accordion-item .accordion-head:not(.collapsed) {
        background-color: #9B791F; /* Change to your desired hover color */
        color: white; /* Text color when active */
    }
    #news-slider{
        margin-top: 10px;
    }
    .post-slide{
        background: #fff;
        margin: 20px 15px 20px;
        border-radius: 15px;
        padding-top: 1px;
        box-shadow: 0px 14px 22px -9px #bbcbd8;
    }
    .post-slide .post-img{
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        margin: -12px 15px 8px 15px;
        margin-left: -10px;
    }
    .post-slide .post-img img{
        width: 100%;
        height: auto;
        transform: scale(1,1);
        transition:transform 0.2s linear;
    }
    .post-slide:hover .post-img img{
        transform: scale(1.1,1.1);
    }
    .post-slide .over-layer{
        width:100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
        opacity:0;
        background: linear-gradient(-45deg, rgba(6,190,244,0.75) 0%, rgba(45,112,253,0.6) 100%);
        transition:all 0.50s linear;
    }
    .post-slide:hover .over-layer{
        opacity:1;
        text-decoration:none;
    }
    .post-slide .over-layer i{
        position: relative;
        top:45%;
        text-align:center;
        display: block;
        color:#fff;
        font-size:25px;
    }
    .post-slide .post-content{
        background:#fff;
        padding: 2px 20px 40px;
        border-radius: 15px;
    }
    .post-slide .post-title a{
        font-size:15px;
        font-weight:bold;
        color:#333;
        display: inline-block;
        text-transform:uppercase;
        transition: all 0.3s ease 0s;
    }
    .post-slide .post-title a:hover{
        text-decoration: none;
        color:#3498db;
    }
    .post-slide .post-description{
        line-height:24px;
        color:#808080;
        margin-bottom:25px;
    }
    .post-slide .post-date{
        color:#a9a9a9;
        font-size: 14px;
    }
    .post-slide .post-date i{
        font-size:20px;
        margin-right:8px;
        color: #CFDACE;
    }
    .post-slide .read-more{
        padding: 7px 20px;
        float: right;
        font-size: 12px;
        background: #2196F3;
        color: #ffffff;
        box-shadow: 0px 10px 20px -10px #1376c5;
        border-radius: 25px;
        text-transform: uppercase;
    }
    .post-slide .read-more:hover{
        background: #3498db;
        text-decoration:none;
        color:#fff;
    }
    .owl-controls .owl-buttons{
        text-align:center;
        margin-top:20px;
    }
    .owl-controls .owl-buttons .owl-prev{
        background: #fff;
        position: absolute;
        top:-13%;
        left:15px;
        padding: 0 18px 0 15px;
        border-radius: 50px;
        box-shadow: 3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }
    .owl-controls .owl-buttons .owl-next{
        background: #fff;
        position: absolute;
        top:-13%;
        right: 15px;
        padding: 0 15px 0 18px;
        border-radius: 50px;
        box-shadow: -3px 14px 25px -10px #92b4d0;
        transition: background 0.5s ease 0s;
    }
    .owl-controls .owl-buttons .owl-prev:after,
    .owl-controls .owl-buttons .owl-next:after{
        content:"\f104";
        font-family: FontAwesome;
        color: #333;
        font-size:30px;
    }
    .owl-controls .owl-buttons .owl-next:after{
        content:"\f105";
    }
    @media only screen and (max-width:1280px) {
        .post-slide .post-content{
            padding: 0px 15px 25px 15px;
        }
    }
</style>
    <style>
        #home {
            position: relative;
            background-color: #193933 !important; /* Black overlay with 50% opacity */
        }
        .header {
            min-height: 40vh;
        }
    </style>
@endsection
@section('header')
    <div class="header-main header-main-s1 is-sticky is-transparent on-dark ">
        <div class="container header-container  border-bottom pb-1">
            <div class="header-wrap">
                <div class="header-logo">
                    <a href="{{route('index')}}.html" class="logo-link">
                        <img class="logo-light logo-img" src="{{asset('Frontend/img/logo.png')}}" srcset="{{asset('Frontend/img/logo.png')}}" alt="logo">
                        <img class="logo-dark logo-img" src="{{asset('Frontend/img/logo.png')}}" srcset="{{asset('Frontend/img/logo.png')}}" alt="logo-dark">
                    </a>
                </div>
                <div class="header-toggle">
                    <button class="menu-toggler" data-target="mainNav">
                        <em class="menu-on icon ni ni-menu"></em>
                        <em class="menu-off icon ni ni-cross"></em>
                    </button>
                </div><!-- .header-nav-toggle -->
                <nav class="header-menu" data-content="mainNav">
                    <ul class="menu-list ms-lg-auto">
                        <li class="menu-item"><a href="{{route('index')}}" class="menu-link nav-link">الصفحة الرئيسية</a></li>

                        <li class="menu-item"><a href="{{route('about')}}" class="menu-link" >من نحن</a></li>
                        <li class="menu-item"><a href="{{route('privacy_policy')}}" class="menu-link">سياسة الخصوصية</a></li>
                        <li class="menu-item"><a href="{{route('conditions')}}" class="menu-link">الشروط والاحكام</a></li>
                        <li class="menu-item"><a href="{{route('contact')}}" class="menu-link nav-link">تواصل معنا</a></li>

                    </ul>
                    <ul class="menu-btns">
                        <li>
                            <a href="https://wa.me/966538269156" target="_blank" class="btn btn-secondary btn-lg">اطلب خدمة</a>
                        </li>
                    </ul>
                </nav><!-- .nk-nav-menu -->
            </div><!-- .header-warp-->
        </div><!-- .container-->

    </div><!-- .header-main-->
    <div class="container">
        <h3 class="fw-bold text-white">اتّصل بنا</h3>
    <nav class="mt-3">
        <ul class="breadcrumb breadcrumb-arrow">
            <li class="breadcrumb-item fs-16px text-white"><a class="text-white" href="{{route('index')}}">الصّفحة الرّئيسيّة</a></li>
            <li class="breadcrumb-item active fs-16px  text-white">اتّصل بنا</li>
        </ul>
    </nav>
    </div>
@endsection
@section('content')
    <section class="section section-service pb-2" id="service" style="padding-top: 100px;">

    </section><!-- .section -->
    <section class="section section-service my-4" id="feature">
        <div class="container">
            <div class="section-content">
                <div class="row justify-content-start text-start g-gs">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-primary">
                                        <em class="icon ni ni-home text-secondary" style="font-size: 80px;"></em>
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <span class="fw-bold">حى الزاهر - مكة المكرمة - السعودية</span>
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-primary">
                                        <em class="icon ni ni-call text-secondary" style="font-size: 80px;"></em>
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <span class="fw-bold">966538269156</span>
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card border">
                            <div class="card-inner card-inner-lg">
                                <div class="service">
                                    <div class="service-icon styled-icon styled-icon-6x text-primary">
                                        <em class="icon ni ni-emails text-secondary" style="font-size: 80px;"></em>
                                    </div><!-- .service-icon -->
                                    <div class="service-text">
                                        <span class="fw-bold">info@qalmalqa.com</span>
                                    </div><!-- .service-text -->
                                </div><!-- .service -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                </div>
                <div class="row">
                <div class="col-sm-6 col-12">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">اتّصل بنا</h5>
                                <span class="fw-bold">لا تتردّد في التّواصل معنا إذا كان لديك أي استفسار متعلّق بشركتنا أو خدماتنا. سوف نبذل قصارى جهدنا للتّواصل معك في أقرب وقت ممكن.</span>
                            </div>
                            <form action="{{route('contact_form')}}" method="post" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="cf-full-name"></label>
                                    <input type="text" class="form-control  fw-bold fs-16px text-secondary"  id="name" name="name" placeholder="اسم المنشأة / الاسم كامل">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="cf-full-name"></label>
                                    <input type="text" class="form-control  fw-bold fs-16px text-secondary"  id="email" name="email" placeholder="البريد الالكترونى">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="cf-full-name"></label>
                                    <input type="text" class="form-control  fw-bold fs-16px text-secondary"   id="phone" name="phone" placeholder="رقم الجوال">
                                </div>
                                <div class="form-group">
                                    <label class="form-label"></label>
                                    <div class="form-control-wrap">
                                        <select class="form-select js-select2" name="type"  >
                                            <option value="default_option" disabled selected>- سبب التواصل -</option>
                                            <option value="1">اقتراح</option>
                                            <option value="2">شكوي</option>
                                            <option value="3">أخري</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="cf-default-textarea"></label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-sm fw-bold fs-16px" id="cf-default-textarea" placeholder="التفاصيل" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">إرسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12">
                    <div class="card h-100">
                        <div class="card-inner">
                            <div class="card w-100">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d232.1032687434202!2d39.79951819447747!3d21.44290752084749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z2YXYqNmG2Yog2KfZhNi22YrYp9mB2Kkg2KfZhNin2K_Yp9ix2Yo!5e0!3m2!1sar!2ssa!4v1726905888806!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </div>;
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div><!-- .container -->
    </section>



@endsection

@section('script')
<script>

    $(document).ready(function() {
        $(".js-select2").select2({
            placeholder: "- سبب التواصل -",
            allowClear: true
        });
    });
</script>
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


