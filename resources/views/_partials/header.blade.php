<div class="container-fluid hidden-xs">
    <div class="row bg-white header">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <header class="header-inner">
                <div class="header-inner-main">
                    <button id="up-down" onclick="myFunction()" type="button" class="header-inner-main-btn closed">
                        <i class="fas fa-bars fa-3x purple"></i>
                        <i id="toggle" class="fas fa-angle-down fa-2x purple" style="padding:10px"></i>
                    </button>
                    <button type="button" class="header-inner-main-searchBtn text-left" aria-label="Search">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                </div>
                @auth
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <button type="button" class="header-inner-profile-btn text-left">
                            <i class="fas fa-user fa-2x"></i>
                            <span style="padding-top:25px; font-size:15px">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        </button>
                    </a>

                    <div class="dropdown-menu user-dropdown dropdown-menu-right log_out" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user') }}">
                            <p>Account info</p>
                        </a>
                        <a class="dropdown-item" href="{{ route('homepage') }}">
                            <p>Go To Home Page</p>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <p>{{ __('Log Out') }}</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    </div>
                @else
                <div class="header-inner-profile">
                    <button type="button" class="header-inner-profile-btn text-left" data-toggle="modal" data-target="#loginModal">
                        <i class="fas fa-user fa-2x"></i>
                        <span>Sign In / Register</span>
                    </button>
                </div>
                @endauth
            </header>
        </div>
    </div>

    <div class="row desktopMenu bg-purple" id="myDropdown" >
        <ul class="desktopMenu-root-list">
            <li class="text-uppercase white ">About pet adoption</li>
            <li class="text-uppercase white ">Dog adoption</li>
            <li class="text-uppercase white ">Cat adoption</li>
            <li class="text-uppercase white ">Pet adoption stories</li>
            <li class="text-uppercase white ">Informations</li>
            <li class="text-uppercase white ">Videos</li>
        </ul>
    </div>
</div>





{{------------ Mobile Navbar ---------------}}

<nav class="navbar navbar-default hidden-sm hidden-md hidden-lg">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <i class="fas fa-bars fa-2x purple"></i>
        </button>
        <a class="navbar-brand" href="{{route('homepage')}}">
            <span class="purple bold">Petfinder</span>
        </a>
      </div>

      <div class="collapse navbar-collapse bg-purple" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="text-uppercase white bold">About pet adoption</li>
            <li class="text-uppercase white bold">Dog adoption</li>
            <li class="text-uppercase white bold">Cat adoption</li>
            <li class="text-uppercase white bold">Pet adoption stories</li>
            <li class="text-uppercase white bold">Informations</li>
            <li class="text-uppercase white bold">Videos</li>
        </ul>
        @auth
        <ul class="nav navbar-nav user-dropdown">
            <li class="white bold">
                <i class="fas fa-user fa-2x"></i>
                <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            </li>
            <li>
                <a href="{{ route('user') }}"> <p>Account info</p></a>
            </li>
            <li>
                <a href="{{ route('homepage') }}"><p>Go To Home Page</p></a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <p>{{ __('Log Out') }}</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
            @else
            <div class="header-inner-profile">
                <button type="button" class="header-inner-profile-btn white bold" data-toggle="modal" data-target="#loginModal">
                    <span>Sign In / Register</span>
                </button>
            </div>
        @endauth
      </div>
    </div>
</nav>

@include('page_sections.login')
