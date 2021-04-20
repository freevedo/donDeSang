<!-- ======= Header ======= -->
<header id="header" >
    <div class="container d-flex align-items-center">

    {{-- <h1 class="logo mr-auto"><a href="{{ url('/') }}">Fasoblood</a></h1> --}}
    <!-- Uncomment below if you prefer to use an image logo -->
     <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid"></a>

<!-- ta classe nav-menu doit avoir un souci et ca bloque les liens-->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Request::is('/') ? 'active' : ''}} "><a class="linkmain" href="{{ url('/') }}">Accueil</a></li>
          <li class="{{ Request::is('/#about') ? 'active' : ''}} "><a class="linkmain" href="{{ url('/#about') }}">A propos</a></li>
          <li class="{{ Request::is('#departments') ? 'active' : ''}} "><a class="linkmain" href="{{ url('/#departments') }}">Conseils Sante</a></li>
          <li class="{{ Request::is('alert') ? 'active' : ''}} "><a href="{{ url('/alert') }}"></i> alertes  <i class='bx bxs-bell-ring' ></i></a></li>
            {{-- <i class="fas fa-sms"> --}}
          <li class="{{ Request::is('alert/create') ? 'active' : ''}} "><a href="{{ url('/alert/create') }}">Envoyer une alerte</a></li>
        @guest
          <li><a href="{{ route('register') }}">S'enregister</a></li>

      </ul>
      
    </nav><!-- .nav-menu -->
      
      
    <ul class="nav navbar-nav navbar-right">
      <li>
      <a href="{{ route('login') }}" class="get-started-btn">Login</a>
      </li>
      @else
      <li class="drop-down"><a href="" class="get-started-btn"> <i class="fas fa-user"></i> {{Auth::user()->prenom}}</a>
        <ul>
          <li >
            <form method="POST" action="{{ route('logout') }}">
              @csrf
            <a href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();" >
             {{ __('Logout') }}
            </a>
          </form>
          </li>
        </ul>
      </li>
        {{-- <div class="btn-group">
          <button type="button" class="nav-link get-started-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          </button>
          <div class="drop-down">
           <form method="POST" action="{{ route('logout') }}">
                @csrf
              <a href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();" >
               {{ __('Logout') }}
              </a>
            </form>
            
          </div>
        </div> --}}
      </li>
    </ul>
      
       

      @endauth
    </div>
  </header><!-- End Header -->