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
    #home {
        position: relative;
        background-color: #193933; /* Black overlay with 50% opacity */
        background-image: url('{{asset('Frontend/img/background.webp')}}'); /* Replace with your image URL */
        background-size: cover; /* Cover the entire container */
        background-position: center; /* Center the image */
    }
</style>
@endsection
@section('header')
    <div class="header-main header-main-s1 is-sticky is-transparent on-dark">
        <div class="container header-container ">
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
                        <li class="menu-item"><a href="https://wa.me/966538269156" class="menu-link nav-link">انضم الينا</a></li>

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
                                <a href="https://wa.me/966538269156" target="_blank" class="btn btn-secondary btn-round btn-lg"><span>اعرف اكثر</span></a>
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
                    <div class="col-md-3 col-lg-3">
                        <div class="card card-shadow" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner">
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
                    <div class="col-md-3 col-lg-3">
                        <div class="card card-shadow p-3" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner ">
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
                    <div class="col-md-3 col-lg-3">
                        <div class="card card-shadow p-3" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner">
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
                    <div class="col-md-3 col-lg-3">
                        <div class="card card-shadow p-3" style="background: #B08D2F; color: #fff;">
                            <div class="card-inner">
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
    <section class="section section-service pb-0" id="feature">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-md-8">
                    <div class="section-head">
                        <h2 class="title text-dark">ماذا نقدّم لكم؟</h2>
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
                                <img  src="{{asset('Frontend/img/marketing.png')}}" >
                                </div>
                                <div class="service-text">
                                    <h4 class="title" style="color: #1F826F;">تسويق الكتروني</h4>
                                    <span class="fw-bold fs-16px text-secondary">بأقل وقت وأقل جهد ممكن نسعى لتصل إلى القمة بمستوى عالٍ من التميز.</span>
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
    <section class="section section-faq" id="faqs">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <div class="section-head">
                        <h2 class="title">كيف نستطيع أن نساعدك؟</h2>
                    </div><!-- .section-head -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="accordion accordion-s1 card  border-0 round-xl" id="accordion">
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-1">
                                <span>من هي قمّة المَلقا لخدمات الاعمال ؟</span>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse " id="accordion-item-1" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>قمة الملقا هي مؤسسة متخصصة في تقديم خدمات الأعمال المبتكرة حيث نعمل على تحقيق الأهداف التجارية من خلال دراسة الجدوى والوساطات العقارية وتطوير حملات تسويقية متكاملة تشمل الاستشارات من المختصين، حيث نؤمن في تحويل الأفكار إلى واقع ملموس ليصل عملاؤنا إلى القمة. </p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed " data-bs-toggle="collapse" data-bs-target="#accordion-item-2">
                                <span>لماذا تختار قمّة المَلقا لخدمات الاعمال ؟</span>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-2" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>إذا كنت تبحث عن السّرعة في الأداء والدّقّة والسّريّة التّامّة في إنجاز جميع خدمات الأعمال، فإنّ قمّة المَلقا لخدمات الاعمال خيارك الأمثل. ويمكنك الاطّلاع على تعليقات عملائنا على الخدمات المقدَّمة لهم عبر حسابنا في تويتر على الرّابط التّالي: https://twitter.com/qalmalqa/likes
                                    </p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed " data-bs-toggle="collapse" data-bs-target="#accordion-item-3">
                                <span>ماهى نوع المنشأت التى تقدم قمّة المَلقا الخدمات لها ؟</span>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-3" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>
                                        الشّركات
                                    </p>
                                    <p>
                                        المصانع

                                    </p>
                                    <p>
                                        المؤسّسات الفرديّة.

                                    </p>
                                </div>
                            </div>
                        </div><!-- .accordion-item -->
                        <div class="accordion-item">
                            <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-4">
                                <span>هل هناك سابقة اعمال لخدمات قمّة المَلقا ؟</span>
                                <span class="accordion-icon"></span>
                            </a>
                            <div class="accordion-body collapse" id="accordion-item-4" data-bs-parent="#accordion">
                                <div class="accordion-inner">
                                    <p>
                                        نعم يمكنكم الاطّلاع على دليل خدماتنا على الرّابط التّالي: <a href="https://bit.ly/3bIpwsy">https://bit.ly/3bIpwsy</a>

                                    </p>

                                </div>
                            </div>
                        </div><!-- .accordion-item -->

                    </div><!-- accordion -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>
    @if(count($blogs) > 0)
    <section class="section pt-0 pb-2" dir="ltr">
        <div class="container">
            <!-- Section title -->
            <div class="row mb-4">
                <div class="col text-start">
                    <h3>أحدث الأخبار</h3>
                </div>
            </div>

            <!-- News Cards Row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                        @foreach($blogs as $blog)
                        <div class="post-slide">
                            <div class="post-img">
                                <img src="{{asset('uploads/blogs/'.$blog->cover)}}" alt="">
                                <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="#">{{$blog->headline}}</a>
                                </h3>
                                <span class="d-block col-4 text-truncate">{{$blog->content}}</span>
                                <span class="post-date"><i class="fa fa-clock-o"></i>{{date('Y-m-d',strtotime($blog->create_at))}}</span>
                                <a href="#" class="read-more">أقرا اكثر</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="section pt-0" dir="ltr">
        <div class="container">
            <!-- Section title -->
            <div class="row mb-4">
                <div class="col text-start">
                    <h3>آراء العملاء</h3>
                </div>
            </div>

            <!-- News Cards Row -->
            <div class="row" >
                <div id="reviews_owl" class="owl-carousel">
                    <div class="card bg-lighter round-xl" dir="rtl">
                        <div class="card-inner card-inner-lg">
                            <div class="review review-s2">
                                <div class="review-portrait review-portrait-s1">
                                    <div class="portrait portrait-s1">
                                        <img src="{{asset('Frontend/img/6525526377210.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="review-content">
                                    <div class="review-rating rating rating-sm">
                                        <ul class="rating-stars">
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                        </ul>
                                    </div>
                                    <div class="review-text">
                                        <p>Iالف شكر شركة إتمام
                                            شهرين ونحن نواجه مشكلة في نظام مدد وبفضلكم بعد الله أنحلت المشكلة
                                            وتم رفع الرواتب على أكمل وجه </p>
                                        <span style="color: #9B791F;">متجر ركن الوسطى الالكتروني للمنتجات الرجالية</span>
                                        <span class="text-dark">مدير المتجر</span>
                                    </div>
                                </div>
                            </div><!-- .review -->
                        </div>
                    </div>
                    <div class="card bg-lighter round-xl" dir="rtl">
                        <div class="card-inner card-inner-lg">
                            <div class="review review-s2">
                                <div class="review-portrait review-portrait-s1">
                                    <div class="portrait portrait-s1">
                                        <img src="{{asset('Frontend/img/6525526377210.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="review-content">
                                    <div class="review-rating rating rating-sm">
                                        <ul class="rating-stars">
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                            <li><em class="icon ni ni-star-fill"></em></li>
                                        </ul>
                                    </div>
                                    <div class="review-text">
                                        <p>Iالف شكر شركة إتمام
                                            شهرين ونحن نواجه مشكلة في نظام مدد وبفضلكم بعد الله أنحلت المشكلة
                                            وتم رفع الرواتب على أكمل وجه </p>
                                        <span style="color: #9B791F;">متجر ركن الوسطى الالكتروني للمنتجات الرجالية</span>
                                        <span class="text-dark">مدير المتجر</span>
                                    </div>
                                </div>
                            </div><!-- .review -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-cta text-light py-0 pb-5" id="cta" >
        <div class="container-fluid bg-primary bg-grad-c">
            <div class="container">
                <div class="card-inner p-5">
                    <div class="row justify-content-between align-items-center g-gs">
                        <div class="col-lg-8">
                            <div class="text-block">
                                <h3 class="title text-light">يسعدنا أن نكون جزءاً من نجاحكم</h3>
                            </div><!-- .text-block -->
                        </div><!-- .col -->
                        <div class="col-lg-4 d-flex justify-content-lg-end">
                            <a href="#" class="btn btn-secondary btn-round btn-lg">تواصل معنا</a>
                        </div>
                    </div><!-- .row -->
                </div><!-- .card-inner -->
            </div><!-- .card -->
        </div><!-- .container -->
    </section>
    <section class="section pt-0" dir="ltr">
        <div class="container">

            <!-- News Cards Row -->
            <div class="row" >
                <div id="clint_owl" class="owl-carousel">
                    <div class="justify-content-center align-content-center"><img src="{{asset('Frontend/img/par/1.webp')}}" style="max-width: 200px;"/></div>
                    <div class="d-flex justify-content-center align-content-center"><img src="{{asset('Frontend/img/par/2.webp')}}" style="max-width: 200px;"/></div>
                    <div><img src="{{asset('Frontend/img/par/3.webp')}}" style="max-width: 200px;"/></div>
                    <div><img src="{{asset('Frontend/img/par/4.webp')}}" style="max-width: 200px;"/></div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
<script>

    $(document).ready(function() {
        // $("#news-slider").owlCarousel({
        //
        //     items : 3,
        //     itemsDesktop:[1199,3],
        //     itemsDesktopSmall:[980,2],
        //     itemsMobile : [600,1],
        //     navigation:true,
        //     navigationText:["",""],
        //     pagination:true,
        //     autoPlay:true,
        // });
        $("#reviews_owl").owlCarousel({
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            items: 3,
            loop: true,
            center: false,
            rewind: false,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            freeDrag: false,
            margin: 40,
            stagePadding: 0,
            merge: false,
            mergeFit: true,
            autoWidth: false,
            startPosition: 0,
            rtl: false,
            smartSpeed: 250,
            fluidSpeed: false,
            dragEndSpeed: false,
            responsive: {
                0: {
                    items: 1
                    // nav: true
                },
                480: {
                    items: 1,
                    nav: false
                },
                768: {
                    items: 2,
                    // nav: true,
                    loop: false
                },
                992: {
                    items: 2,
                    // nav: true,
                    loop: false
                }
            },
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            fallbackEasing: "swing",
            info: false,
            nestedItemSelector: false,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
            autoHeight: false,
            lazyLoad: false
        });
        $("#clint_owl").owlCarousel({
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            items: 8,
            loop: true,
            center: false,
            rewind: false,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            freeDrag: false,
            margin: 20,
            stagePadding: 0,
            merge: false,
            mergeFit: true,
            autoWidth: false,
            startPosition: 0,
            rtl: false,
            smartSpeed: 250,
            fluidSpeed: false,
            dragEndSpeed: false,
            responsive: {
                0: {
                    items: 2
                    // nav: true
                },
                480: {
                    items: 4,
                    nav: false
                },
                768: {
                    items: 5,
                    // nav: true,
                    loop: false
                },
                992: {
                    items: 5,
                    // nav: true,
                    loop: false
                }
            },
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            fallbackEasing: "swing",
            info: false,
            nestedItemSelector: false,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
            autoHeight: false,
            lazyLoad: false
        });

        var owl = $("#news-slider");
        owl.owlCarousel({
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            items: 3,
            loop: true,
            center: false,
            rewind: false,
            mouseDrag: true,
            touchDrag: true,
            pullDrag: true,
            freeDrag: false,
            margin: 0,
            stagePadding: 0,
            merge: false,
            mergeFit: true,
            autoWidth: false,
            startPosition: 0,
            rtl: false,
            smartSpeed: 250,
            fluidSpeed: false,
            dragEndSpeed: false,
            responsive: {
                0: {
                    items: 1
                    // nav: true
                },
                480: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 3,
                    // nav: true,
                    loop: false
                },
                992: {
                    items: 3,
                    // nav: true,
                    loop: false
                }
            },
            responsiveRefreshRate: 200,
            responsiveBaseElement: window,
            fallbackEasing: "swing",
            info: false,
            nestedItemSelector: false,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab",
            autoHeight: false,
            lazyLoad: false
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


