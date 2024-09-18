<!DOCTYPE html>
<html lang="zxx" class="js" dir="rtl">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('Frontend/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>@yield('title')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('Frontend/css/dashlite.rtl.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('Frontend/css/theme.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    @yield('style')

    <style>
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
    </style>
</head>

<body class="nk-body bg-white npc-landing ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <header class="header has-header-main-s1 bg-dark next-overlap-3x" id="home">
            <div class="header-main header-main-s1 is-sticky is-transparent on-dark ">
                <div class="container header-container">
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
                                <li class="menu-item"><a href="#home" class="menu-link nav-link">الصفحة الرئيسية</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#" class="menu-link menu-toggle">من نحن</a>
                                    <div class="menu-sub">
                                        <ul class="menu-list">
                                            <li class="menu-item has-sub">
                                                <a href="#" class="menu-link menu-toggle">Auth Pages</a>
                                                <div class="menu-sub">
                                                    <ul class="menu-list">
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login.html" class="menu-link" target="_blank">Login / Signin</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login-v2.html" class="menu-link" target="_blank">Login / Signin v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login-v3.html" class="menu-link" target="_blank">Login / Signin v3</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register.html" class="menu-link" target="_blank">Register / Signup</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register-v2.html" class="menu-link" target="_blank">Register / Signup v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register-v3.html" class="menu-link" target="_blank">Register / Signup v3</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset.html" class="menu-link" target="_blank">Forgot Password</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset-v2.html" class="menu-link" target="_blank">Forgot Password v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset-v3.html" class="menu-link" target="_blank">Forgot Password v3</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a href="#" class="menu-link menu-toggle">Error Pages</a>
                                                <div class="menu-sub">
                                                    <ul class="menu-list">
                                                        <li class="menu-item"><a href="html/pages/errors/404-classic.html" target="_blank" class="menu-link">404 Classic</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/404-modern.html" target="_blank" class="menu-link">404 Modern</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/504-classic.html" target="_blank" class="menu-link">504 Classic</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/504-modern.html" target="_blank" class="menu-link">504 Modern</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item has-sub">
                                    <a href="#" class="menu-link menu-toggle">مركز المساعدة</a>
                                    <div class="menu-sub">
                                        <ul class="menu-list">
                                            <li class="menu-item has-sub">
                                                <a href="#" class="menu-link menu-toggle">Auth Pages</a>
                                                <div class="menu-sub">
                                                    <ul class="menu-list">
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login.html" class="menu-link" target="_blank">Login / Signin</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login-v2.html" class="menu-link" target="_blank">Login / Signin v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login-v3.html" class="menu-link" target="_blank">Login / Signin v3</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register.html" class="menu-link" target="_blank">Register / Signup</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register-v2.html" class="menu-link" target="_blank">Register / Signup v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register-v3.html" class="menu-link" target="_blank">Register / Signup v3</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset.html" class="menu-link" target="_blank">Forgot Password</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset-v2.html" class="menu-link" target="_blank">Forgot Password v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset-v3.html" class="menu-link" target="_blank">Forgot Password v3</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a href="#" class="menu-link menu-toggle">Error Pages</a>
                                                <div class="menu-sub">
                                                    <ul class="menu-list">
                                                        <li class="menu-item"><a href="html/pages/errors/404-classic.html" target="_blank" class="menu-link">404 Classic</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/404-modern.html" target="_blank" class="menu-link">404 Modern</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/504-classic.html" target="_blank" class="menu-link">504 Classic</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/504-modern.html" target="_blank" class="menu-link">504 Modern</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="#home" class="menu-link nav-link">الباقات</a></li>
                                <li class="menu-item has-sub">
                                    <a href="#" class="menu-link menu-toggle">الخدمات</a>
                                    <div class="menu-sub">
                                        <ul class="menu-list">
                                            <li class="menu-item has-sub">
                                                <a href="#" class="menu-link menu-toggle">Auth Pages</a>
                                                <div class="menu-sub">
                                                    <ul class="menu-list">
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login.html" class="menu-link" target="_blank">Login / Signin</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login-v2.html" class="menu-link" target="_blank">Login / Signin v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-login-v3.html" class="menu-link" target="_blank">Login / Signin v3</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register.html" class="menu-link" target="_blank">Register / Signup</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register-v2.html" class="menu-link" target="_blank">Register / Signup v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-register-v3.html" class="menu-link" target="_blank">Register / Signup v3</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset.html" class="menu-link" target="_blank">Forgot Password</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset-v2.html" class="menu-link" target="_blank">Forgot Password v2</a></li>
                                                        <li class="menu-item"><a href="html/pages/auths/auth-reset-v3.html" class="menu-link" target="_blank">Forgot Password v3</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item has-sub">
                                                <a href="#" class="menu-link menu-toggle">Error Pages</a>
                                                <div class="menu-sub">
                                                    <ul class="menu-list">
                                                        <li class="menu-item"><a href="html/pages/errors/404-classic.html" target="_blank" class="menu-link">404 Classic</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/404-modern.html" target="_blank" class="menu-link">404 Modern</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/504-classic.html" target="_blank" class="menu-link">504 Classic</a></li>
                                                        <li class="menu-item"><a href="html/pages/errors/504-modern.html" target="_blank" class="menu-link">504 Modern</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="#home" class="menu-link nav-link">انضم الينا</a></li>

                            </ul>
                            <ul class="menu-btns">
                                <li>
                                    <a href="https://1.envato.market/e0y3g" target="_blank" class="btn btn-secondary btn-lg">اطلب خدمة</a>
                                </li>
                            </ul>
                        </nav><!-- .nk-nav-menu -->
                    </div><!-- .header-warp-->
                </div><!-- .container-->
            </div><!-- .header-main-->
            @yield('header')

        </header><!-- .header -->


        @yield('content')

        <footer class="footer bg-primary is-dark">
            <div class="container">
                <div class="row justify-content-between py-4 py-md-6">
                    <div class="col-lg-4 col-md-6">
                        <div class="widget widget-about">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demora lized by the charms of pleasure.</p>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-6 col-12">
                        <div class="widget">
                            <h6 class="widget-title">Ressources</h6>
                            <ul class="widget-link link-inline link-inline-2col link-inline-md-3col g-2 py-2">
                                <li><a href="#">Learning</a></li>
                                <li><a href="#">Support center</a></li>
                                <li><a href="#">Frequent questions</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">SaaS services</a></li>
                                <li><a href="#">Knowledge Center</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <hr class="hr border-light mb-0 mt-n1">
                <div class="row g-3 align-items-center justify-content-md-between py-4">
                    <div class="col-md-8">
                        <div>Copyright &copy; 2023 Dashlite. Template Made by <a class="text-base fw-bold" href="#">Softnio</a></div>
                    </div><!-- .col -->
                    <div class="col-md-4 d-flex justify-content-md-end">
                        <ul class="social">
                            <li><a href="#"><em class="icon ni ni-twitter"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-facebook-f"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-instagram"></em></a></li>
                            <li><a href="#"><em class="icon ni ni-pinterest"></em></a></li>
                        </ul><!-- .footer-icon -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </footer>
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
@yield('script')
<script src="{{asset('Frontend/js/bundle.js')}}"></script>
<script src="{{asset('Frontend/js/scripts.js')}}"></script>
</body>

</html>
