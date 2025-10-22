  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

<a href="{{ route('/') }}" class="logo d-flex align-items-center me-auto">
    <img src="assets/img/cel_logo.png" alt="" style="width: auto; height: au200pxto;">
    <h1 class="sitename" style="color:  #0c1e3e ">CYBER-EXPRESS</h1> 
</a>

    <nav id="navmenu" class="navmenu">
    <ul>
        <li>
            <a href="{{ route('/') }}" 
               class="nav-link {{ request()->routeIs('/') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="{{ route('services') }}" 
               class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
        </li>
        <li>
            <a href="{{ route('cel2.portfolio') }}" 
               class="nav-link {{ request()->routeIs('cel2.portfolio') ? 'active' : '' }}">Portfolio</a>
        </li>
        
        <li class="dropdown">
            <a href="#"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="{{ route('lets-talk') }}">Lets Talk</a></li>
                <li><a href="{{ route('contact.show') }}">Contact</a></li>

                @auth
                    <!-- Only show Dashboard if logged in -->
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

                    <!-- Logout -->
                    <li>
                        <a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <!-- Show Login if NOT logged in -->
                    <li><a href="{{ route('login') }}">Login</a></li>
                    {{-- If you want Register too: --}}
                    {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                @endauth
            </ul>
        </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>


      {{-- <a class="btn-getstarted" href="about.html">Get Started</a> --}}

    </div>
  </header>