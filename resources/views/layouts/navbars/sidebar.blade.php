<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('admin') }}">
                {{-- <img src="{{asset('assets/img/header/admin_header.png')}}" class="navbar-brand-img" alt="..."> --}}
            </a>
            <div class="ml-auto">
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    @if(Auth::user()->permission == '1')
                        <li class="nav-item ">
                            <a class="nav-link collapsed" href="{{route('blog.index')}}" role="button"  aria-controls="navbar-dashboards">
                                <i class="ni ni-circle-08 text-primary"></i>
                                <span class="nav-link-text">{{ __('Blogs') }}</span>
                            </a>                       
                        </li>
                    
                        <li class="nav-item ">
                            <a class="nav-link collapsed" href="{{route('vlog.index')}}" role="button"  aria-controls="navbar-dashboards">
                                <i class="ni ni-book-bookmark text-primary"></i>
                                <span class="nav-link-text">{{ __('Vlogs') }}</span>
                            </a>                       
                        </li> 
                        
                        <li class="nav-item ">
                            <a class="nav-link collapsed" href="{{route('changepassword')}}" role="button"  aria-controls="navbar-dashboards">
                                <i class="ni ni-book-bookmark text-primary"></i>
                                <span class="nav-link-text">{{ __('Change Password') }}</span>
                            </a>                       
                        </li> 
                        
                    @else

                       
                    @endif    
               
                </ul>
               
              
            </div>
        </div>
    </div>
</nav>