<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Finate - Job Portal Website Template Using Bootstrap 5"/>
    <meta name="keywords" content="accessories, digital products, electronic html, modern, products, responsive"/>
    <meta name="author" content="hastech"/>

    <title>TOPCINVIEC - Job Portal Website Template Using Bootstrap 5</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="./public/assets/img/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!--== Icofont Icon CSS ==-->
    <link href="{{asset('assets/css/icofont.css')}}" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="{{asset(('assets/css/swiper.min.css'))}}" rel="stylesheet"/>
    <!--== Fancybox Min CSS ==-->
    <link href="{{asset('assets/css/fancybox.min.css')}}" rel="stylesheet"/>
    <!--== Aos Min CSS ==-->
    <link href="{{asset('assets/css/aos.min.css')}}" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <header class="header-area transparent">
        <div class="container">
            <div class="row no-gutter align-items-center position-relative">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-start">
                            <div class="header-logo-area">
                                <a href="{{route('home')}}">
                                    <img class="logo-main" src="{{asset('assets/img/logo-light.webp')}}" alt="Logo"/>
                                    <img class="logo-light" src="{{asset('assets/img/logo-light.webp')}}" alt="Logo"/>
                                </a>
                            </div>
                        </div>
                        <div class="header-align-center">
                            <div class="header-navigation-area position-relative">
                                <ul class="main-menu nav">
                                    <li><a style="font-size: 20px" href="{{route('home')}}"><span>Home</span></a></li>
                                    <li class="has-submenu"><a style="font-size: 20px"
                                                               href="{{route('posts.index')}}"><span>Jobs</span></a></a>
                                    </li>
                                    <li class="has-submenu"><a style="font-size: 20px"
                                                               href="{{route('recruiters.index')}}">Recruiters</a></a>
                                    </li>
                                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role_id !== 1  && \Illuminate\Support\Facades\Auth::user()->role_id !== 2)
                                        <li><a style="font-size: 20px" href="{{route('posts.employers')}}"><span>My posts</span></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-end">
                            <div class="header-action-area">
                                @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role_id !== 1  && \Illuminate\Support\Facades\Auth::user()->role_id !== 2)
                                    <a class="btn-registration" href="{{route('posts.create')}}"><span></span>New
                                        Post</a>
                                    <a class="btn-registration" href="{{route('logout')}}"><span></span>Logout</a>
                                @elseif(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->role_id !== 1)
                                    <a class="btn-registration" href="{{route('logout')}}"><span></span>Logout</a>
                                @else
                                    <a class="btn-registration" href="{{route('showFormLogin')}}"><span></span>Login</a>
                                    <a class="btn-registration"
                                       href="{{route('formRegister')}}"><span></span>Register</a>
                                @endif
                                <button class="btn-menu" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                                    <i class="icofont-navigation-menu"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--== End Header Wrapper ==-->
</div>
