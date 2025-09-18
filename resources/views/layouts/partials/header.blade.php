  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ route('/') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">CYBER-EXPRESS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('/') }}" class="nav-link {{ request()->routeIs('/') ? 'active' : '' }}" class="active">Home</a></li>
          <li><a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
          <li><a href="{{ route('cel2.portfolio') }}" class="nav-link {{ request()->routeIs('cel2.portfolio') ? 'active' : '' }}">Portfolio</a></li>
              <li class="dropdown"><a href="#"><span>Company</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('team') }}">Team </a></li>
                  <li><a href="{{ route('lets-talk') }}">Lets Talk</a></li>
                  <li><a href="{{ route('contact') }}">Contact </a></li>
                  <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                </ul>
              </li>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted" href="about.html">Get Started</a> --}}

    </div>
  </header>