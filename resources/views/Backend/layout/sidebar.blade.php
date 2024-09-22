@php
    $current_page = \Illuminate\Support\Facades\Route::currentRouteName();
@endphp

<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('backend/images/logo.png')}}"
                     srcset="{{asset('backend/images/logo2x.png')}}" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('backend/images/logo-dark.png')}}"
                     srcset="{{asset('backend/images/logo-dark.png')}}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{asset('backend/images/logo-dark2x.png')}}"
                     srcset="{{asset('backend/images/logo-small.png')}}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="{{route('admin.blog.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em
                                            class="icon ni ni-blogger"></em></span>
                                    <span class="nk-menu-text">المقالات</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('admin.contact.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em
                                            class="icon ni ni-contact"></em></span>
                            <span class="nk-menu-text">طلبات التواصل</span>
                        </a>
                    </li><!-- .nk-menu-item -->


                </ul><!-- .nk-menu -->

            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
