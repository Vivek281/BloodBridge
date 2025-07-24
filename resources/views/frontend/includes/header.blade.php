 <header id="header" class="header sticky-top">
 <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:bloodbrige@gmail.com">{{ $settings['email'] ?? 'bloodbridge11@gmail.com'}}</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $settings['phone'] ?? '+977 9706007151' }}</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="{{ $settings['twitter'] ?? '#'}}" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="{{ $settings['facebook'] ?? '#'}}" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="{{ $settings['instagram'] ?? '#'}}" class="instagram"><i class="bi bi-instagram"></i></a>
          
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">{{ $settings['sitename'] ?? 'BloodBridge'}}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            
            <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> -->
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <nav id="navmenu" class="navmenu"> 
              <ul>
                 @if(auth()->check())
                 <li><a class="cta-btn d-none d-sm-block" href="{{route('request.form')}}">Request for blood</a></li>
                  <li><a  href="#profile"class="text-gray-400">Logged in as: {{auth()->check() ? ucwords(auth()->user()->name) : ''}}
                    <!-- <img class="img-profile rounded-circle"src="backend/img/undraw_profile.svg"> -->
                  </a></li>
                  <li><a  href="{{route('logout')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a></li>
                
                @else
                <li><a class="cta-btn d-none d-sm-block" href="{{route('login.form')}}">Login</a></li> 
                <li><a class="cta-btn d-none d-sm-block" href="{{route('signup.form')}}">Signup</a></li>
                    @endif
            </ul>           
          </nav>

       


          

          
      </div>

    </div>

  </header>