<!DOCTYPE html>
<html lang="zxx" class="js" dir="rtl">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('Frontend/images/favicon.png')}}">
    <!-- Page Title  -->
    {!! SEO::generate() !!}

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('Frontend/css/dashlite.rtl.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('Frontend/css/theme.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    @yield('style')

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,400i,700");

        .logo-img {
            max-height: 80px;
        }
        .next-overlap-3x + .section {
            margin-top: -12.875rem;
        }
        .header-main.has-fixed {
            position: fixed;
            padding: 0;
            box-shadow: 0 1px 3px 2px rgba(31, 43, 58, 0.08);
            width: 100%;
            background: #193933;
            color: #fff;
        }
        .menu-link {
            color: #fff !important;
        }

        .card-shadow {
            transition: transform 0.3s; /* Smooth transition */
            round-clip: 40px;
        }
        .card-shadow:hover {
            transform: scale(1.1); /* Scale up on hover */
            background: #0c5a45;
            border: solid 1px #9B791F;
        }
        * {
            font-family: "Roboto", sans-serif;
        }
        button.wh-ap-btn {
            outline: none;
            width: 60px;
            height: 60px;
            border: 0;
            background-color: #2ecc71;
            padding: 0;
            border-radius: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            cursor: pointer;
            transition: opacity 0.3s, background 0.3s, box-shadow 0.3s;
        }

        button.wh-ap-btn::after {
            content: "";
            background-image: url("//i.imgur.com/cAS6qqn.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 60%;
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
        }

        button.wh-ap-btn:hover {
            opacity: 1;
            background-color: #20bf6b;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .wh-api {
            position: fixed;
            bottom: 0;
            right: 0;
        }

        .wh-fixed {
            margin-right: 15px;
            margin-bottom: 15px;
        }

        .wh-fixed > a {
            display: block;
            text-decoration: none;
        }

        button.wh-ap-btn::before {
            content: "تواصل معنا";
            display: block;
            position: absolute;
            margin-right: 80px;
            margin-top: 16px;
            height: 25px;
            background: #49654e;
            color: #fff;
            font-weight: 400;
            font-size: 15px;
            border-radius: 3px;
            width: 0;
            opacity: 0;
            transition: opacity 0.4s, width 0.4s, padding 0.5s;
            padding-top: 7px;
            border-radius: 30px;
            box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
        }

        .wh-fixed > a:hover button.wh-ap-btn::before {
            opacity: 1;
            width: auto;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            width: 100px;
        }

        /* animacion pulse */

        .whatsapp-pulse {
            width: 60px;
            height: 60px;
            right: 10px;
            bottom: 10px;
            background: #10b418;
            position: fixed;
            text-align: center;
            color: #ffffff;
            cursor: pointer;
            border-radius: 50%;
            z-index: 99;
            display: inline-block;
            line-height: 65px;
        }

        .whatsapp-pulse:before {
            position: absolute;
            content: " ";
            z-index: -1;
            bottom: -15px;
            right: -15px;
            background-color: #10b418;
            width: 90px;
            height: 90px;
            border-radius: 100%;
            animation-fill-mode: both;
            -webkit-animation-fill-mode: both;
            opacity: 0.6;
            -webkit-animation: pulse 1s ease-out;
            animation: pulse 1.8s ease-out;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(0);
                opacity: 0;
            }
            25% {
                -webkit-transform: scale(0.3);
                opacity: 1;
            }
            50% {
                -webkit-transform: scale(0.6);
                opacity: 0.6;
            }
            75% {
                -webkit-transform: scale(0.9);
                opacity: 0.3;
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0;
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            25% {
                transform: scale(0.3);
                opacity: 1;
            }
            50% {
                transform: scale(0.6);
                opacity: 0.6;
            }
            75% {
                transform: scale(0.9);
                opacity: 0.3;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

    </style>
</head>

<body class="nk-body bg-white npc-landing ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <div class="header-main-s1  is-transparent on-dark bg-primary py-3 d-sm-block d-none">
            <div class="container header-container">
                <div class="row">
                    <div class="col-6 d-flex justify-content-start text-center">
                        <ul class="social">
                            <li><em class="icon ni ni-mail text-white fs-16px"></em> <span class="text-white fs-14px " style="padding-right: 10px;">info@qalmalqa.com</span></li>
                            <li><em class="icon ni ni-call text-white fs-16px"></em> <span class="text-white fs-14px " style="padding-right: 10px;">966538269156</span></li>
                        </ul>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <ul class="social">
                            <li><a href="#"><em class="icon ni ni-whatsapp text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-twitter text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-facebook-f text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-linkedin text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-youtube text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-instagram text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-telegram text-white"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-snapchat text-white"></em></a></li>
                            <li class="text-center border border-bottom-0 border-top-0"><a class="text-center text-white" href="#"><span class="me-2 text-center">English</span> <em class="icon ni ni-globe text-white"></em></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <header class="header has-header-main-s1 bg-dark next-overlap-3x" id="home">
            @yield('header')

        </header><!-- .header -->


        @yield('content')

        <footer class="footer bg-primary is-dark">
            <div class="container">
                <div class="row  py-4 py-md-6">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget-about">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img" src="{{asset('Frontend/img/logo.png')}}" srcset="{{asset('Frontend/img/logo.png')}}" alt="logo">
                                <img class="logo-dark logo-img" src="{{asset('Frontend/img/logo.png')}}" srcset="{{asset('Frontend/img/logo.png')}}" alt="logo-dark">
                            </a>
                            <p>الأولى في المملكة في خدمات الأعمال يهدف عملنا إلى ابتكار الأفكار واستقطاب الكوادر التي تمثّل أعلى معايير التّميّز في تقديم خدمةٍ مهنيّةٍ احترافيّةٍ بأعلى جودةٍ ممكنةٍ وتمكين كلّ من يساهم بذلك من النّموّ المستمرّ.</p>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-2 col-12">
                        <div class="widget">
                            <h6 class="widget-title">روابط هامّة</h6>
                            <ul class="widget-link text-white g-2 py-2">
                                <li><a class="text-white" href="#">اطلب خدمة</a></li>
                                <li><a class="text-white" href="#">من نحن؟</a></li>
                                <li><a class="text-white" href="#">الأسئلة الشائعة</a></li>
                                <li><a class="text-white" href="#">اتّصل بنا</a></li>
                                <li><a class="text-white" href="#">انضم إلينا</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h6 class="widget-title">النّشرة الإخباريّة</h6>
                           <div>
                               <div class="form-group ">
                                   <div class="form-control-wrap">
                                       <input type="email" class="form-control form-control-lg" id="email" placeholder="أدخل عنوان البريد الألكتروني">
                                   </div>
                               </div>
                               <a href="#" class="btn btn-lg btn-secondary">الإشتراك</a>
                           </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-3 col-12">
                        <div class="widget">
                            <h6 class="widget-title">اتّصل بنا</h6>
                           <div>
                               <div class="">
                                   <div class="service service-s3">
                                       <div class="service-icon   text-primary">
                                           <em class="icon ni ni-home-fill text-white"></em>
                                       </div>
                                       <div class="service-text text-white">
                                           <span class="title">حى الزاهر - مكة المكرمة - السعودية</span>
                                       </div>
                                   </div><!-- .service -->
                                   <div class="service service-s3">
                                       <div class="service-icon   text-primary">
                                           <em class="icon ni ni-call-alt-fill text-white"></em>
                                       </div>
                                       <div class="service-text text-white">
                                           <span class="title">966538269156</span>
                                       </div>
                                   </div><!-- .service -->
                                   <div class="service service-s3">
                                       <div class="service-icon   text-primary">
                                           <em class="icon ni ni-emails-fill text-white"></em>
                                       </div>
                                       <div class="service-text text-white">
                                           <span class="title">info@qalmalqa.com</span>
                                       </div>
                                   </div><!-- .service -->
                               </div>
                           </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <hr class="hr border-light mb-0 mt-n1">
                <div class="row g-3 align-items-center justify-content-md-between py-4">
                    <div class="col-md-8">
                        <div class="text-white"> مؤسسة قمّة المَلقا لخدمات الاعمال مؤسسة موثّقةٌ لدى وزارة التّجارة، بسجلٍّ تجاريٍّ رقم <a class="text-base fw-bold" href="#">4031306132</a></div>
                    </div><!-- .col -->
                    <div class="col-md-4 d-flex justify-content-md-end">
                        <div class="pe-2"><img src="{{asset('Frontend/img/VAT.webp')}}" style="max-width: 35px;"/></div>
                        <div class="pe-2"><img src="{{asset('Frontend/img/ma3rof.webp')}}" style="max-width: 100px;"/></div>
                        <div><img src="{{asset('Frontend/img/sa.webp')}}"  style="filter: brightness(0) invert(1); max-width: 40px;"/></div>

                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </footer>
    </div>
    <!-- main @e -->
</div>
<div class="wh-api">
    <div class="wh-fixed whatsapp-pulse">
        <a href="https://api.whatsapp.com/send?phone=966538269156&text=مرحبا هل يمكن المساعدة" target="-_blank">
            <button class="wh-ap-btn"></button>
        </a>
    </div>
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{asset('Frontend/js/bundle.js')}}"></script>
<script src="{{asset('Frontend/js/scripts.js')}}"></script>
<script src="{{asset('Frontend/js/owl.carousel.min.js')}}"></script>
@yield('script')

</body>

</html>
