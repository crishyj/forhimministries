<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/img/apple/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/img/apple/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/img/apple/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/img/apple/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/img/apple/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/img/apple/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/img/apple/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/apple/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/apple/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/apple/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/img/apple/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/apple/favicon-16x16.png')}}">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/slider.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/lightbox.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    @stack('css')


  </head>
  <body>
      
      <div class="container">
            <div class="row header">
                <div class="col-sm-2 col-3 logo text-center">
                    <div>
                        <a href="{{ route('home') }}">  <img src="{{ asset('assets/img/Logo%20Cross.jpg')}}" alt=""> </a>
                    </div>                   
                    <div class="laptop_show">
                            <a href="http://www.facebook.com/For-Him-Ministry-96528235679" target="_blank">
                                <img src="{{asset('assets/img/facebook.png')}}" alt="">
                            </a>
                            <a href="mailto:CustomerCare@ForHimMinistries.org" target="_blank">
                                <img src="{{asset('assets/img/email.png')}}" alt="">
                            </a>
                    </div>
                </div>
                <div class="col-sm-10 col-9 text-center top_img">
                    <img src="{{ asset('assets/img/For%20Him%20Logo%20Clear.png')}}" alt="">
                </div>
                {{-- <div class="col-sm-2 header_sPart">                   
                    <div class="header_social">
                        <a href="http://www.facebook.com/For-Him-Ministry-96528235679" target="_blank">
                            <img src="{{asset('assets/img/facebook.png')}}" alt="">
                        </a>
                        <a href="mailto:CustomerCare@ForHimMinistries.org" target="_blank">
                            <img src="{{asset('assets/img/email.png')}}" alt="">
                        </a>
                    </div>
                    <div>
                        Contact Us Today For More Info
                    </div>
                </div> --}}
            </div>
            <div class="row nav">
                <nav class="navbar navbar-expand-md navbar-light shadow-sm">
                    <div class="container">
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="mobile_show">
                                <a href="http://www.facebook.com/For-Him-Ministry-96528235679" target="_blank">
                                    <img src="{{asset('assets/img/facebook.png')}}" alt="">
                                </a>
                                <a href="mailto:CustomerCare@ForHimMinistries.org" target="_blank">
                                    <img src="{{asset('assets/img/email.png')}}" alt="">
                                </a>
                                <div class="">Connect/Contact us Today!</div>                                
                        </div>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('HOME') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('salvation') }}">{{ __('SALVATION') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('prayer') }}">{{ __('PRAYER') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        {{ __('BLOGS-VLOGS') }}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ route('blog') }}">{{ __('BLOGS') }}</a>
                                        <a class="dropdown-item" href="{{ route('vlog') }}">{{ __('VLOGS') }}</a>                                         
                                    </div>
                                </li>
                               
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                     ABOUT
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{ route('about_vision') }}">FHM Vision/Mission</a>
                                      <a class="dropdown-item" href="{{ route('pastor_steve') }}">Pastor Steve</a>
                                      <a class="dropdown-item" href="{{ route('pending') }}">The Team</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.amazon.com/kindle-dbs/entity/author/B01C65NKJO?_encoding=UTF8&amp;node=2656022011&amp;offset=0&amp;pageSize=12&amp;searchAlias=stripbooks&amp;sort=author-sidecar-rank&amp;page=1&amp;langFilter=default#formatSelectorHeader"
                                    target="blank">{{ __('STORE') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('donation') }}">{{ __('DONATE') }}</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        RECORDING STUDIO
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="{{ route('pending') }}">Studio Vision/Mission</a>
                                      <a class="dropdown-item" href="{{ route('pending') }}">Services Offered</a>
                                      <a class="dropdown-item" href="{{ route('pending') }}">Completed Projects</a>
                                      <a class="dropdown-item" href="{{ route('pending') }}">Building Progress</a>
                                    </div>
                                </li>
                            </ul>
        
                            {{-- <ul class="navbar-nav ml-auto">
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul> --}}
                        </div>
                    </div>
                </nav>
            </div>
      </div>
      @yield('content')

      <div class="container footer text-center">
            &copy; Copyright 2004 - 2021 For Him Ministries.
      </div>

    {{-- <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/lavalamp/js/jquery.lavalamp.min.js"></script>
    <script src="{{ asset('assets/js/slider.js')}}"></script>
    <script src="{{ asset('assets/js/lightbox.js')}}"></script>   
   

    @yield('after_script')
    <script>      
        $('.dropdown').hover(				
            function () {
                $(this).addClass('show');
                var dropdownMenu = $(this).children(".dropdown-menu");
                dropdownMenu.addClass('show');
            }, 
                
            function () {
                $(this).removeClass('show');
                var dropdownMenu = $(this).children(".dropdown-menu");
                dropdownMenu.removeClass('show');
            }
        );
    </script>
    
      @stack('js')
      <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
      <script src="{{ asset('argon') }}/js/demo.min.js"></script>
    
  </body>
</html>