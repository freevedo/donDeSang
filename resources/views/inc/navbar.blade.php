<!-- ======= Header ======= -->
<header id="header" >
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}">SosBloodbf</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : ''}} "><a href="/">Accueil</a></li>
          <li class="{{ Request::is('/#about') ? 'active' : ''}} "><a href="{{ url('/#about') }}">A propos</a></li>
          <li class="{{ Request::is('#departments') ? 'active' : ''}} "><a href="{{ url('/#departments') }}">Conseils Sante</a></li>
          <li class="{{ Request::is('alert') ? 'active' : ''}} "><a href="{{ url('/alert') }}"></i> alertes  <i class='bx bxs-bell-ring' ></i></a></li><strong class="push-number" id="unread"></strong>
            {{-- <i class="fas fa-sms"> --}}
          <li class="{{ Request::is('alert/create') ? 'active' : ''}} "><a href="{{ url('/alert/create') }}">Envoyer une alerte</a></li>
         
        @guest
          <li><a href="{{ route('register') }}">S'enregister</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}" class="get-started-btn">Login</a>
      @else

        <div class="btn-group">
          <button type="button" class="nav-link get-started-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Auth::user()->prenom}}
          </button>
          <div class="dropdown-menu">
           <form method="POST" action="{{ route('logout') }}">
                @csrf
              <a href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();">
               {{ __('Logout') }}
              </a>
            </form>
            
          </div>
        </div>
      
      
       

      @endauth
    </div>
  </header><!-- End Header -->